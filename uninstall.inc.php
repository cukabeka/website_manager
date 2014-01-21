<?php

// add lang file
$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/website_manager/lang/');

if (!OOAddon::isActivated('website_manager')) {
	// don't allow uninstall if website manager is active. otherwise codeline hint msg won't be shown.
	$REX['ADDON']['installmsg']['website_manager'] = $I18N->msg('website_manager_uninstall_activate_first');
	$REX['ADDON']['install']['website_manager'] = 1;
} else if (isset($REX['WEBSITE_MANAGER_DO_UNINSTALL']) && !$REX['WEBSITE_MANAGER_DO_UNINSTALL']) {
	// don't allow uninstall if user still has codeline in master.inc.php
	$REX['ADDON']['installmsg']['website_manager'] = $I18N->msg('website_manager_uninstall_codeline_hint');
	$REX['ADDON']['install']['website_manager'] = 1;
} else {
	$sql = new rex_sql();
	//$sql->debugsql = true;

	$sql->setQuery('DROP TABLE IF EXISTS `rex_website`');

	$REX['ADDON']['install']['website_manager'] = 0;
}

