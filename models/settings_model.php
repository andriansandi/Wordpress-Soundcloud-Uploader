<?php
/**
 * Soundcloud Uploader Settings Model
 *
 * @author 		Sandi Andrian <andrian.sandi@gmail.com>
 * @since  		Jan 23, 2015
 * @version  	1.0
 * @package  	soundcloud-uploader
 **/

if(is_admin())
{
	add_action('admin_init','register_soundcloud_settings');
}

function register_soundcloud_settings()
{
	register_setting('soundcloud-settings-group','soundcloud_client_id');
	register_setting('soundcloud-settings-group','soundcloud_client_secret');
}