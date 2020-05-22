<?php
/*
Plugin Name: Pico - Gutenberg Fix
Plugin URI: https://github.com/zgordon/tito-wordpress-block
Description: Corrects styling issue with Pico plugin and WordPress block styles
Version: 1.0.0
Contributors: zgordon
Author: Zac Gordon
Author URI: https://zacgordon.com
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: picogutenbergfix
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );

include( plugin_dir_path( __FILE__ ) . 'includes/enqueue-scripts.php');

?>