
<div class="rex-addon-output">
	<h2 class="rex-hl2">settings.inc.php</h2>
	<div class="rex-area-content">
		<pre class="rex-code"><?php echo rex_website_manager_utils::print_r_pretty($REX['WEBSITE_MANAGER_SETTINGS']); ?></pre>
	</div>
</div>

<div class="rex-addon-output">
	<h2 class="rex-hl2">custom/create_website.before.inc.php</h2>
	<div class="rex-area-content">
		<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/create_website.before.inc.php')); ?>
	</div>
</div>

<div class="rex-addon-output">
	<h2 class="rex-hl2">custom/create_website.after.inc.php</h2>
	<div class="rex-area-content">
		<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/create_website.after.inc.php')); ?>
	</div>
</div>

<div class="rex-addon-output">
	<h2 class="rex-hl2">custom/destroy_website.before.inc.php</h2>
	<div class="rex-area-content">
		<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/destroy_website.before.inc.php')); ?>
	</div>
</div>

<div class="rex-addon-output">
	<h2 class="rex-hl2">custom/destroy_website.after.inc.php</h2>
	<div class="rex-area-content">
		<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/destroy_website.after.inc.php')); ?>
	</div>
</div>

<style type="text/css">
.rex-addon-output p {
	margin-bottom: 5px;
}
</style>
