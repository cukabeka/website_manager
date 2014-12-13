<?php
// init addon
$REX['ADDON']['name']['website_manager'] = 'Website Manager';
$REX['ADDON']['page']['website_manager'] = 'website_manager';
$REX['ADDON']['version']['website_manager'] = '3.0.0 DEV';
$REX['ADDON']['author']['website_manager'] = "RexDude";
$REX['ADDON']['supportpage']['website_manager'] = 'forum.redaxo.de';
$REX['ADDON']['perm']['website_manager'] = 'website_manager[]';

// permissions
$REX['PERM'][] = 'website_manager[]';

if ($REX['REDAXO']) {
	// add lang file
	$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/website_manager/lang/');
}

// front and backend includes
require_once($REX['INCLUDE_PATH'] . '/addons/website_manager/paths.inc.php');
require_once($REX['INCLUDE_PATH'] . '/addons/website_manager/install/settings.default.inc.php');
require_once($REX['INCLUDE_PATH'] . '/addons/website_manager/classes/class.rex_website_manager_utils.inc.php');

// overwrite default settings with user settings
rex_website_manager_utils::includeSettingsFile();

if ($REX['REDAXO'] && !$REX['SETUP']) {
	// backend includes
	require_once($REX['INCLUDE_PATH'] . '/addons/website_manager/classes/class.klogger.inc.php');

	// logout stuff
	if (rex_request('rex_logout') == 1) {
		// reset website selection
		rex_set_session('current_website_id', rex_website::firstId);		

		// show user msg when no permissions for any websites
		if (rex_request('noperm_msg') == 1) {
			rex_register_extension('OUTPUT_FILTER', 'rex_website_manager_utils::noPermMsg');
		}
	}

	// check for existence of website manager object
	if (isset($REX['WEBSITE_MANAGER'])) {
		// used for addon uninstall to stop user from uninstallig when wm codeline ist still in master.inc.php
		$REX['WEBSITE_MANAGER_DO_UNINSTALL'] = false;

		// add subpages
		$REX['ADDON']['website_manager']['SUBPAGES'] = array(
			array('', $I18N->msg('website_manager_websites'))
		);

		// plugins (will be autoloaded incl. language file)
		$plugins = OOPlugin::getAvailablePlugins('website_manager');

		for ($i = 0; $i < count($plugins); $i++) {
			$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/website_manager/plugins/' . $plugins[$i] . '/lang/'); // make msg for subpage available at this point 
			array_push($REX['ADDON']['website_manager']['SUBPAGES'], array($plugins[$i], $I18N->msg('website_manager_' . $plugins[$i])));
		}

		array_push($REX['ADDON']['website_manager']['SUBPAGES'], 
			array('tools', $I18N->msg('website_manager_tools')),
			array('options', $I18N->msg('website_manager_options')),
			array('setup', $I18N->msg('website_manager_setup')),
			array('help', $I18N->msg('website_manager_help'))
		);
	} else {
		// this is only neccesary until user has put this code line in master.inc.php
		require_once(WEBSITE_MANAGER_GENERATED_DIR . 'init.inc.php');

		// used for addon uninstall to stop user from uninstallig when wm codeline ist still in master.inc.php
		$REX['WEBSITE_MANAGER_DO_UNINSTALL'] = true;
	
		// add only setup subpage
		$REX['ADDON']['website_manager']['SUBPAGES'] = array(
			array('', $I18N->msg('website_manager_setup')),
			array('help', $I18N->msg('website_manager_help'))
		);
	}

	if (rex_request('page') != '') { // login
		// check permissions (has to be done here because $REX['USER'] is not availabe in master.inc.php)
		$REX['WEBSITE_MANAGER']->checkPermissions();

		// add css/js to page header
		rex_register_extension('PAGE_HEADER', 'rex_website_manager_utils::appendToPageHeader');

		if (rex_request('install') != '1') { // this shoudn't go off when addon gets installed
			// add website select and other stuff
			rex_register_extension('OUTPUT_FILTER', 'rex_website_manager_utils::addToOutputFilter');
		}

		// frontend link in meta menu 
		if ($REX['WEBSITE_MANAGER_SETTINGS']['show_metamenu_frontend_link']) {
			rex_register_extension('META_NAVI', 'rex_website_manager_utils::addFrontendLinkToMetaMenu');
		}

		// fix article preview link
		if (!isset($REX['ADDON']['seo42']['settings']['one_page_mode']) || (isset($REX['ADDON']['seo42']['settings']['one_page_mode']) && !$REX['ADDON']['seo42']['settings']['one_page_mode'])) {
			rex_register_extension('PAGE_CONTENT_MENU', 'rex_website_manager_utils::fixArticlePreviewLink');
		}

		// fix clang
		rex_register_extension('CLANG_ADDED', 'rex_website_manager::fixClang');
		rex_register_extension('CLANG_DELETED', 'rex_website_manager::fixClang');
	}

	// init sortable rex list with prio switch
	rex_website_manager_utils::initPrioSwitch();
}
