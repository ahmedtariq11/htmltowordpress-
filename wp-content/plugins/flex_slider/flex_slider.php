<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wppb.me/
 * @since             1.0.0
 * @package           Flex_slider
 *
 * @wordpress-plugin
 * Plugin Name:       flex_slider
 * Plugin URI:        https://wppb.me/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            ahmed
 * Author URI:        https://wppb.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       flex_slider
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FLEX_SLIDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-flex_slider-activator.php
 */

if ( ! defined( 'PLUGIN_PATH' ) ) {
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
}
if ( ! defined( 'PLUGIN_URL' ) ) {
define('PLUGIN_URL', plugin_dir_url(__FILE__));
}
if ( ! defined( 'PLUGIN_FILE' ) ) {
define('PLUGIN_FILE', __FILE__);
}



function activate_flex_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-flex_slider-activator.php';
	Flex_slider_Activator::activate();
}

function deactivate_flex_slider() {

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-flex_slider-deactivator.php';
	Flex_slider_Deactivator::deactivate();

}
register_activation_hook( __FILE__, 'activate_flex_slider' );
register_deactivation_hook( __FILE__, 'deactivate_flex_slider' );
require plugin_dir_path( __FILE__ ) . 'includes/class-flex_slider.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-flex_slider_shortcodes.php';




