<?php
$REX['WEBSITE_MANAGER_REXVARS']['SERVER'] = $REX['SERVER'];
$REX['WEBSITE_MANAGER_REXVARS']['SERVERNAME'] = $REX['SERVERNAME'];
$REX['WEBSITE_MANAGER_REXVARS']['START_ARTICLE_ID']= $REX['START_ARTICLE_ID'];
$REX['WEBSITE_MANAGER_REXVARS']['NOTFOUND_ARTICLE_ID'] = $REX['NOTFOUND_ARTICLE_ID'];
$REX['WEBSITE_MANAGER_REXVARS']['DEFAULT_TEMPLATE_ID'] = $REX['DEFAULT_TEMPLATE_ID'];
$REX['WEBSITE_MANAGER_REXVARS']['MEDIA_DIR'] = $REX['MEDIA_DIR'];
$REX['WEBSITE_MANAGER_REXVARS']['MEDIAFOLDER'] = $REX['MEDIAFOLDER'];
$REX['WEBSITE_MANAGER_REXVARS']['GENERATED_PATH'] = $REX['GENERATED_PATH'];
$REX['WEBSITE_MANAGER_REXVARS']['TABLE_PREFIX'] = $REX['TABLE_PREFIX'];
?>

<h2>REX Vars for current Website</h2>
<pre class="rex-code"><?php echo rex_website_manager_utils::print_r_pretty($REX['WEBSITE_MANAGER_REXVARS']); ?></pre>

<?php
unset($REX['WEBSITE_MANAGER_REXVARS']);
?>

<h2>Settings</h2>
<pre class="rex-code"><?php echo rex_website_manager_utils::print_r_pretty($REX['WEBSITE_MANAGER_SETTINGS']); ?></pre>

<h2>create_website.before.inc.php</h2>
<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/create_website.before.inc.php')); ?>

<h2>create_website.after.inc.php</h2>
<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/create_website.after.inc.php')); ?>


<h2>destroy_website.before.inc.php</h2>
<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/destroy_website.before.inc.php')); ?>

<h2>destroy_website.after.inc.php</h2>
<?php echo rex_highlight_string(file_get_contents($REX['INCLUDE_PATH'] . '/data/addons/website_manager/custom/destroy_website.after.inc.php')); ?>

<style type="text/css">
.rex-addon-output p {
	margin-bottom: 5px;
}

.rex-addon-output h2 {
	margin-bottom: 5px;
}

.rex-addon-output pre {
	margin-bottom: 15px;
}
</style>


