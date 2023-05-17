<?php
/*
Plugin Name: گرویتی فرم فارسی
Description: بسته کامل بومی ساز گرویتی فرم برای ایرانیان - به همراه امکانات جانبی
Plugin URI: https://wordpress.org/plugins/persian-gravity-forms/
Version: 2.5.15
Author: گرویتی فرم فارسی
Author URI: https://profiles.wordpress.org/persianscript/
Domain Path: /languages/
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'GF_PERSIAN_VERSION' ) ) {
	define( 'GF_PERSIAN_VERSION', '2.5.15' );
}

if ( ! defined( 'GF_PERSIAN_SLUG' ) ) {
	define( 'GF_PERSIAN_SLUG', 'persian' );
}

if ( ! defined( 'GF_PERSIAN_DIR' ) ) {
	define( 'GF_PERSIAN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'GF_PERSIAN_URL' ) ) {
	define( 'GF_PERSIAN_URL', plugins_url( '', __FILE__ ) . '/' );
}

require_once 'includes/class-core.php';
