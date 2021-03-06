<?php
$codeExample1 = "// ----- SET CLANG
include_once " . '$' . "REX['INCLUDE_PATH'].'/clang.inc.php';";

$codeExample2 = "// init website manager
require_once(" . '$' . "REX['INCLUDE_PATH'] . '/data/addons/website_manager/generated/init.inc.php');";
?>

<div class="rex-addon-output">
	<h2 class="rex-hl2"><?php echo $I18N->msg('website_manager_setup_step1'); ?></h2>
	<div class="rex-area-content">
		<ul>
			<li><?php echo $I18N->msg('website_manager_setup_step1_msg1a'); ?></li>
			<li><?php echo $I18N->msg('website_manager_setup_step1_msg1b'); ?></li>
			<li><?php echo $I18N->msg('website_manager_setup_step1_msg1c'); ?></li>
			<li><?php echo $I18N->msg('website_manager_setup_step1_msg1d'); ?></li>
		</ul>
	</div>
</div>

<div class="rex-addon-output">
	<h2 class="rex-hl2"><?php echo $I18N->msg('website_manager_setup_step2'); ?></h2>
	<div class="rex-area-content">
		<p class="info-msg"><?php echo $I18N->msg('website_manager_setup_step2_msg1a'); ?></p>
		<?php rex_highlight_string($codeExample1); ?>
		<p class="info-msg top-margin"><?php echo $I18N->msg('website_manager_setup_step2_msg1b'); ?></p>
		<?php rex_highlight_string($codeExample2); ?>
		<p class="info-msg no-bottom-margin"><?php echo $I18N->msg('website_manager_setup_step2_msg2'); ?></p>
	</div>
</div>

<div class="rex-addon-output">
	<h2 class="rex-hl2"><?php echo $I18N->msg('website_manager_setup_step3'); ?></h2>
	<div class="rex-area-content">
		<p><?php echo $I18N->msg('website_manager_setup_step3_msg1'); ?></p>
	</div>
</div>

<style type="text/css">
#rex-page-website-manager .info-msg {
	margin-bottom: 10px;
}

#rex-page-website-manager .top-margin {
	margin-top: 15px;
}

#rex-page-website-manager .no-bottom-margin {
	margin-bottom: 0px;
	margin-top: 10px;
}

#rex-page-website-manager .rex-code {
   white-space: nowrap;
}
</style>
