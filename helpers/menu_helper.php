<?php
/**
 * Menu Setup Helper
 *
 * @author 		Sandi Andrian <andrian.sandi@gmail.com>
 * @since  		Jan 23, 2015
 * @version  	1.0
 * @package  	soundcloud-uploader
 **/

// Create Setting Page Menu
add_action('admin_menu','soundcloud_uploader_admin_menu_setup');

function soundcloud_uploader_admin_menu_setup()
{
	add_options_page('Soundcloud Uploader Settings',
					 'Soundcloud Uploader',
					 'manage_options',
					 'soundcloud-uploader-settings',
					 'soundcloud_uploader_settings_page');
}