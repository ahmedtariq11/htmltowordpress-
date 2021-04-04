<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://wppb.me/
 * @since      1.0.0
 *
 * @package    Flex_slider
 * @subpackage Flex_slider/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Flex_slider
 * @subpackage Flex_slider/includes
 * @author     ahmed <ahmedtariqlife900@gmail.com>
 */
class Flex_slider_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		require_once (ABSPATH .'wp-admin/includes/upgrade.php');

	}

}
