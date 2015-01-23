<?php
/**
 * App Helper
 *
 * @author 		Sandi Andrian <andrian.sandi@gmail.com>
 * @since  		Jan 23, 2015
 * @version  	1.0
 * @package  	soundcloud-uploader
 **/

function check_permissions()
{
	if (!current_user_can('manage_options'))  
		wp_die(__( 'You do not have sufficient permissions to access this page.'));
}