<?php

// if one day website_manager_update_msg value will be changed, key name + update.inc.php must be changed too, otherwise user will get old msg!

if ($I18N->hasMsg('website_manager_update_msg')) {
	$msg = $I18N->msg('website_manager_update_msg');
} else {
	$msg = 'Website Manager: Bitte beachten Sie die <a href="index.php?page=website_manager&subpage=help&chapter=update">Update-Hinweise</a> für diese Version (wenn vorhanden).';
}

echo rex_info($msg);

$REX['ADDON']['update']['website_manager'] = 1;
