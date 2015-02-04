<?php

$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');
$func = rex_request('func', 'string');

// save settings
if ($func == 'update') {
	$settings = (array) rex_post('settings', 'array', array());

	rex_website_manager_utils::replaceSettings($settings);
	rex_website_manager_utils::updateSettingsFile();
}

if ($REX['WEBSITE_MANAGER']->getWebsiteCount() > 1) {
	$disabled = ' disabled="disabled" ';
} else {
	$disabled = '';
}
?>

<div class="rex-addon-output">
	<div class="rex-form">

		<h2 class="rex-hl2"><?php echo $I18N->msg('website_manager_settings'); ?></h2>

		<form action="index.php" method="post">

			<fieldset class="rex-form-col-1">
				<div class="rex-form-wrapper">
					<input type="hidden" name="page" value="<?php echo $page; ?>" />
					<input type="hidden" name="subpage" value="<?php echo $subpage; ?>" />
					<input type="hidden" name="func" value="update" />

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-text">
							<label for="reinstall_addons"><?php echo $I18N->msg('website_manager_settings_reinstall_addons'); ?></label>
							<input type="text" value="<?php echo rex_website_manager_utils::implodeArray($REX['WEBSITE_MANAGER_SETTINGS']['reinstall_addons']); ?>" name="settings[reinstall_addons]" class="rex-form-text tags addon" id="reinstall_addons">
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-text">
							<label for="reinstall_plugins"><?php echo $I18N->msg('website_manager_settings_reinstall_plugins'); ?></label>
							<input type="text" value="<?php echo rex_website_manager_utils::implodeArray($REX['WEBSITE_MANAGER_SETTINGS']['reinstall_plugins']); ?>" name="settings[reinstall_plugins]" class="rex-form-text tags plugin" id="reinstall_plugins">
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="identical_media"><?php echo $I18N->msg('website_manager_settings_identical_media'); ?></label>
							<input type="hidden" name="settings[identical_media]" value="0" />
							<input <?php echo $disabled; ?> type="checkbox" name="settings[identical_media]" id="identical_media" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['identical_media']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="identical_templates"><?php echo $I18N->msg('website_manager_settings_identical_templates'); ?></label>
							<input type="hidden" name="settings[identical_templates]" value="0" />
							<input <?php echo $disabled; ?> type="checkbox" name="settings[identical_templates]" id="identical_templates" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['identical_templates']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="identical_modules"><?php echo $I18N->msg('website_manager_settings_identical_modules'); ?></label>
							<input type="hidden" name="settings[identical_modules]" value="0" />
							<input <?php echo $disabled; ?> type="checkbox" name="settings[identical_modules]" id="identical_modules" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['identical_modules']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="identical_clangs"><?php echo $I18N->msg('website_manager_settings_identical_clangs'); ?></label>
							<input type="hidden" name="settings[identical_clangs]" value="0" />
							<input <?php echo $disabled; ?> type="checkbox" name="settings[identical_clangs]" id="identical_clangs" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['identical_clangs']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="identical_meta_infos"><?php echo $I18N->msg('website_manager_settings_identical_meta_infos'); ?></label>
							<input type="hidden" name="settings[identical_meta_infos]" value="0" />
							<input <?php echo $disabled; ?> type="checkbox" name="settings[identical_meta_infos]" id="identical_meta_infos" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['identical_meta_infos']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="identical_image_types"><?php echo $I18N->msg('website_manager_settings_identical_image_types'); ?></label>
							<input type="hidden" name="settings[identical_image_types]" value="0" />
							<input <?php echo $disabled; ?> type="checkbox" name="settings[identical_image_types]" id="identical_image_types" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['identical_image_types']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="ignore_permissions"><?php echo $I18N->msg('website_manager_settings_ignore_permissions'); ?></label>
							<input type="hidden" name="settings[ignore_permissions]" value="0" />
							<input type="checkbox" name="settings[ignore_permissions]" id="ignore_permissions" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['ignore_permissions']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="allow_website_delete"><?php echo $I18N->msg('website_manager_settings_allow_website_delete'); ?></label>
							<input type="hidden" name="settings[allow_website_delete]" value="0" />
							<input type="checkbox" name="settings[allow_website_delete]" id="allow_website_delete" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['allow_website_delete']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="show_metamenu_frontend_link"><?php echo $I18N->msg('website_manager_settings_show_metamenu_frontend_link'); ?></label>
							<input type="hidden" name="settings[show_metamenu_frontend_link]" value="0" />
							<input type="checkbox" name="settings[show_metamenu_frontend_link]" id="show_metamenu_frontend_link" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['show_metamenu_frontend_link']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="show_website_name_frontend_link"><?php echo $I18N->msg('website_manager_settings_show_website_name_frontend_link'); ?></label>
							<input type="hidden" name="settings[show_website_name_frontend_link]" value="0" />
							<input type="checkbox" name="settings[show_website_name_frontend_link]" id="show_website_name_frontend_link" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['show_website_name_frontend_link']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="show_color_bar"><?php echo $I18N->msg('website_manager_settings_show_color_bar'); ?></label>
							<input type="hidden" name="settings[show_color_bar]" value="0" />
							<input type="checkbox" name="settings[show_color_bar]" id="show_color_bar" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['show_color_bar']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="colorize_favicon"><?php echo $I18N->msg('website_manager_settings_colorize_favicon'); ?></label>
							<input type="hidden" name="settings[colorize_favicon]" value="0" />
							<input type="checkbox" name="settings[colorize_favicon]" id="colorize_favicon" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['colorize_favicon']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="allow_www_non_www_domains"><?php echo $I18N->msg('website_manager_settings_allow_www_non_www_domains'); ?></label>
							<input type="hidden" name="settings[allow_www_non_www_domains]" value="0" />
							<input type="checkbox" name="settings[allow_www_non_www_domains]" id="allow_www_non_www_domains" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['allow_www_non_www_domains']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-checkbox">
							<label for="allow_uninstall"><?php echo $I18N->msg('website_manager_settings_allow_uninstall'); ?></label>
							<input type="hidden" name="settings[allow_uninstall]" value="0" />
							<input type="checkbox" name="settings[allow_uninstall]" id="allow_uninstall" value="1" <?php if ($REX['WEBSITE_MANAGER_SETTINGS']['allow_uninstall']) { echo 'checked="checked"'; } ?>>
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-submit">
							<input type="submit" class="rex-form-submit" name="sendit" value="<?php echo $I18N->msg('website_manager_settings_save'); ?>" />
						</p>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		if (!jQuery.ui) {
			$('head').append('<script type="text/javascript" src="../files/addons/website_manager/jquery-ui.min.js" />');
		}
		// tag editor inputs fields
		$('input.tags.addon').tagEditor({
			placeholder: "<?php echo $I18N->msg('website_manager_settings_tag_editor_hint_addon'); ?>"
		});

		$('input.tags.plugin').tagEditor({
			placeholder: "<?php echo $I18N->msg('website_manager_settings_tag_editor_hint_plugin'); ?>"
		});
	});
</script>

<style type="text/css">
.tag-editor .tag-editor-delete i {
	background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAVCAYAAACKTPRDAAAAAXNSR0IArs4c6QAAALRJREFUKM/djrsNwkAQRN+apqyLzkWYNkyCM6SJcUIbfNyDIyC3RQMWZaAlOSNAyAWwya7eaGbWJLVAI+lKGkk5sM6ABjhKCkkIwBFo7B2Y2dbda6CUdF4AdF03FkXxcPedmW0knQCyyenutZmt3L2eKhap/AAsJZ1ijFdgH2O8ZMB66kgpZ6BM/G9mgPYG+Tu7QT5AOx1jDwGghzDA+DIkcO+hSjt8xCfBe6i+hd/O2c65b59NWGY4WqqKhQAAAABJRU5ErkJggg==');
}
</style>


