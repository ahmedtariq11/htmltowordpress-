<?php

/**
 * Fired during plugin activation
 *
 * @link       https://wppb.me/
 * @since      1.0.0
 *
 * @package    Flex_slider
 * @subpackage Flex_slider/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Flex_slider
 * @subpackage Flex_slider/includes
 * @author     ahmed <ahmedtariqlife900@gmail.com>
 */
class Flex_slider_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		//post status and options
   $post = array(
         'comment_status' => 'open',
         'ping_status' =>  'closed' ,
         'post_date' => date('Y-m-d H:i:s'),
         'post_name' => 'wpblog_review',
         'post_status' => 'publish' ,
         'post_title' => 'wpblog Reviews',
         'post_type' => 'flex-slider',
   );
   //insert page and save the id
   $newvalue = wp_insert_post( $post, false );
   //save the id in the database
   update_option( 'mrpage', $newvalue );
	}

}
