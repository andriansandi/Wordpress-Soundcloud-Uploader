<?php
/**
 * Plugin Name: Soundcloud Uploader
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Wordpress plugin upload audio to soundcloud
 * Version: 1.0
 * Author: Sandi Andrian
 * Author URI: http://coderalliance.com
 * License: GPL2
 **/


// Include Helper
include_once('helpers/app_helper.php');
include_once('helpers/menu_helper.php');

// Views
foreach(glob(dirname(__FILE__) . '/models/*.php') as $file) 
{
    require_once($file);
}

// Views
foreach(glob(dirname(__FILE__) . '/views/*.php') as $file) 
{
    require_once($file);
}