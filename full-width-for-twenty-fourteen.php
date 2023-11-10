<?php
/**
 * Plugin Name: Full Width for Twenty Fourteen
 * Version: 1.0.0
 * Description: A simple user friendly plugin which converts the Twenty Fourteen theme to full width
 * Author: Andrija Radojev
 * Author URI: https://radojev.com/
 * Requires at least: 4.0
 * Tested up to: 6.2.2
 *
 * Text Domain: full-width-for-twenty-fourteen
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Andrija Radojev
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-full-width-for-twenty-fourteen.php';
require_once 'includes/class-full-width-for-twenty-fourteen-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-full-width-for-twenty-fourteen-admin-api.php';
require_once 'includes/lib/class-full-width-for-twenty-fourteen-post-type.php';
require_once 'includes/lib/class-full-width-for-twenty-fourteen-taxonomy.php';

/**
 * Returns the main instance of Full_Width_for_Twenty_Fourteen to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Full_Width_for_Twenty_Fourteen
 */
function fwftf_full_width_for_twenty_fourteen() {
	$instance = Full_Width_for_Twenty_Fourteen::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Full_Width_for_Twenty_Fourteen_Settings::instance( $instance );
	}

	return $instance;
}

fwftf_full_width_for_twenty_fourteen();
