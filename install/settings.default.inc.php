<?php

// ****************************************************************
// ** DON'T MAKE CHANGES TO THIS FILE!                           **
// ** USE settings.inc.php in DATA dir of REDAXO!                **
// ****************************************************************

// default settings (user settings are saved in data dir!)
$REX['WEBSITE_MANAGER_SETTINGS'] = array(
	// this addons will be reinstalled if new website is added e.g. array('string_table', 'tracking_code'). seo42 and slice_status are automatically supported
	'reinstall_addons' => array(), 

	// this plugins will be reinstalled if new website is added e.g. array(array('be_utilities', 'hide_startarticle'))
	'reinstall_plugins' => array(), 

	// if true all websites will have one mediapool
	'identical_media' => false, 

	// if true all websites will have the same templates
	'identical_templates' => true, 

	// if true all websites will have the same modules and same actions
	'identical_modules' => true, 

	// >>>>> "true" is CURRENTLY UNSUPPORTED <<<<< if true all websites will have the same clangs
	'identical_clangs' => false, 

	// >>>>> "true" is CURRENTLY UNSUPPORTED <<<<< if true all websites will have the same meta infos. if false meta info addon will be reinstalled automatically if available.
	'identical_meta_infos' => false, 

	// if true all websites will have the same image types. if false image manager addon will be reinstalled automatically if available.
	'identical_image_types' => true, 

	// if true every user will have access to all websites
	'ignore_permissions' => false, 

	// if false admins won't be allowed to delete websites
	'allow_website_delete' => true, 

	// if true link to frontend will be shown in meta menu of redaxo backend
	'show_metamenu_frontend_link' => true, 

	// if true name of the website including a link to the frontend will be shown in redaxo header
	'show_website_name_frontend_link' => true, 

	// if true a color bar will be shown in redaxo header
	'show_color_bar' => true, 

	// if true favicon will be auto colorized too when adding new website
	'colorize_favicon' => true, 

	// if true www and non-www domains will be supported for a website, needed for SEO42 no double content redirects
	'allow_www_non_www_domains' => true 
);
