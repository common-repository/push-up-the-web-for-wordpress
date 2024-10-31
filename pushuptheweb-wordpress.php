<?php
/*
Plugin Name: Push up the Web for WordPress
Plugin URI: http://www.pushuptheweb.com
Description: Pushup is an effort to push the web forward by helping users upgrade their outdated browsers.
Version: 2.0.0
Author: Francois Botha
Author URI: http://www.vwd.co.za

*/

// Visit http://www.pushuptheweb.com for the original Javascript version.

// Pre-2.6 compatibility
if ( !defined('WP_CONTENT_URL') )
    define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
if ( !defined('WP_CONTENT_DIR') )
    define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
 
// Guess the location
$putwpath = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));

function putw_init_locale(){
	load_plugin_textdomain('putw', $putwpath);
}
add_filter('init', 'putw_init_locale');

function putw_wp_head() {
	global $putwpath, $post;
	echo "<link rel='stylesheet' type='text/css' href='$putwpath/pushuptheweb/css/pushup.css' />\n";
	echo "<script type='text/javascript' src='$putwpath/pushuptheweb/js/pushup.js'></script>\n";
}


add_action('wp_head', 'putw_wp_head');

?>