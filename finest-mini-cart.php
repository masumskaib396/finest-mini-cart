<?php
/*
Plugin Name: Finest Mini Cart
Plugin URI: https://github.com/masumskaib396/finest-mini-cart
Description: Finest Mini Cart allows your customers to view and control their cart without leaving the page. Bring more conversions and sales to your business using this interactive plugin.
Version: 1.0.0
Author: FinestWP
Author URI: http://finestdevs.com/
License: GPLv2 or later
Text Domain: finest-mini-cart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



//Set plugin version constant.
define( 'FMC_VERSION', '1.0.0');

/* Set constant path to the plugin directory. */
define( 'FMC', trailingslashit( plugin_dir_path( __FILE__ ) ) );

// Plugin Function Folder Path
define( 'FMC_INC', plugin_dir_path( __FILE__ ) . 'includes/' );

// Assets Folder URL
define( 'FMC_ASSETS_CSS', plugins_url( 'assets/css/', __FILE__ ) );
define( 'FMC_ASSETS_SCROLLBAR_CSS', plugins_url( 'assets/perfect-scrollbar/css/', __FILE__ ) );
define( 'FMC_ASSETS_SCROLLBAR_JS', plugins_url( 'assets/perfect-scrollbar/js/', __FILE__ ) );
define( 'FMC_ASSETS_JS', plugins_url( 'assets/js/', __FILE__ ) );


require_once( FMC_INC . 'base.php' );

