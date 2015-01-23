<?php
/**
 * Soundcloud Uploader Settings Page
 *
 * @author 		Sandi Andrian <andrian.sandi@gmail.com>
 * @since  		Jan 23, 2015
 * @version  	1.0
 * @package  	soundcloud-uploader
 **/

function soundcloud_uploader_settings_page()
{
	check_permissions();
	?>
	<div class="wrap">
		<h2>Soundcloud Uploader Settings</h2>
		<form method="post" action="options.php">
			<?php settings_fields('soundcloud-settings-group'); ?>
    		<?php do_settings_sections('soundcloud-settings-group'); ?>
    		<table class="form-table">
				<tr valign="top">
					<th scope="row">Client ID:</th>
					<td>
						<input type="text" class="regular-text" name="soundcloud_client_id" value="<?php echo esc_attr(get_option('soundcloud_client_id')); ?>">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Client Secret:</th>
					<td>
						<input type="text" class="regular-text" name="soundcloud_client_secret" value="<?php echo esc_attr(get_option('soundcloud_client_secret')); ?>">
					</td>
				</tr>
    		</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}