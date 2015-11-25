<?php
/*
Plugin Name: WP Town
Description: Common shortcode, widget
Author: Toan Bui
Version: 0.0.1
Author URI: http://toanbui.com
*/

require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'WordpressSeniorDevelopers', "wptown" );
}