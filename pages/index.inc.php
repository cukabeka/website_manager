<?php
// post vars
$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');

// if no subpage specified, use this one
if ($subpage == '') {
	if (count($REX['ADDON']['website_manager']['SUBPAGES']) > 3) {
		$subpage = 'websites';
	} else {
		$subpage = 'setup';
	}
}

// layout top
require($REX['INCLUDE_PATH'] . '/layout/top.php');

// title
rex_title($REX['ADDON']['name']['website_manager'] . ' <span style="font-size:14px; color:silver;">' . $REX['ADDON']['version']['website_manager'] . '</span>', $REX['ADDON']['website_manager']['SUBPAGES']);

// include subpage
$addonSubpageFile = $REX['INCLUDE_PATH'] . '/addons/website_manager/pages/' . $subpage . '.inc.php';
$pluginSubpageFile = $REX['INCLUDE_PATH'] . '/addons/website_manager/plugins/' . $subpage . '/pages/' . $subpage . '.inc.php';

if (file_exists($addonSubpageFile)) {
	include($addonSubpageFile);
} else {
	include($pluginSubpageFile);
}
?>

<style type="text/css">
a.extern,
#rex-page-website-manager #subpage-help a[href^="http://"],
#rex-page-website-manager #subpage-help a[href^="https://"] {
	background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAA8CAYAAACq76C9AAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFFSURBVHjaYtTpO/CfAQcACCAmBjwAIIAY//9HaNTtP4hiCkAAMeGSAAGAAGJCl7hcaM8IYwMEEBMuCRAACCAmXBIgABBAKA5CBwABhNcrAAGEVxIggPBKAgQQXkmAAMIrCRBAeCUBAgivJEAA4ZUECCC8kgABhFcSIIDwSgIEEF5JgADCKwkQQHglAQIIryRAAOGVBAggvJIAAYRXEiCA8EoCBBBeSYAAwisJEEB4JQECiAVbNoABgADCqxMggPDmMoAAwpvLAAIIby4DCCC8uQwggPDmMoAAwpvLAAIIr1cAAgivJEAA4ZUECCC8kgABhFcSIIDwSgIEEF5JgADCKwkQQHglAQIIryRAAOGVBAggvJIAAYRXEiCA8EoCBBBeSYAAwisJEEB4JQECCK8kQADhlQQIILySAAGEVxIggPBKAgQYAARTLlfrU5G2AAAAAElFTkSuQmCC) no-repeat right 3px;
	padding-right: 10px;
}

#rex-page-website-manager div.rex-addon-content p.rex-code {
	margin-bottom: 22px;
	margin-top: 3px;
}

#rex-page-website-manager .addon-template h1 {
	font-size: 18px;
	margin-bottom: 7px;
}

#rex-page-website-manager #subpage-help a.rex-active {
    color: #14568A;
}

#rex-page-website-manager #subpage-help div.rex-addon-content {
    padding: 10px 12px;
}

#rex-page-website-manager #subpage-help div.rex-addon-content ul {
	margin-top: 0;
}

#rex-page-website-manager .rex-code {
	overflow: auto;
	white-space: nowrap;
}

#rex-page-website-manager p.logo {
	text-align: center;
	margin-top: 30px;
	margin-bottom: 15px;
}
</style>

<?php 
// layout bottom
require($REX['INCLUDE_PATH'] . '/layout/bottom.php');
?>
