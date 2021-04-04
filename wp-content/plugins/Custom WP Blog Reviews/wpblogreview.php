<?php 
/* 
Plugin Name: MOvie Plugin
Plugin URI: https://wordpress.org/plugins/ 
Description: Just another example shortcode plugin. 
Version: 1.0.0 
Author: Ahmed aLI 
Author URI: https://www.davidangulo.xIyz/ 
*/ 



function register_wpblog_review()
{
   $labels = array(
       'name' => _x('wpblog Reviews', 'wpblog_review'),
       'singular_name' => _x('wpblog Review', 'wpblog_review'),
       'add_new' => _x('Add New', 'wpblog_review'),
       'add_new_item' => _x('Add New wpblog Review', 'wpblog_review'),
       'edit_item' => _x('Edit wpblog Review', 'wpblog_review'),
       'new_item' => _x('New wpblog Review', 'wpblog_review'),
       'view_item' => _x('View wpblog Review', 'wpblog_review'),
       'search_items' => _x('Search wpblog Reviews', 'wpblog_review'),
       'not_found' => _x('No wpblog reviews found', 'wpblog_review'),
       'not_found_in_trash' => _x('No wpblog reviews found in Trash', 'wpblog_review'),
       'parent_item_colon' => _x('Parent wpblog Review:', 'wpblog_review'),
       'menu_name' => _x('wpblog Reviews', 'wpblog_review'),
   );
   $args = array(
       'labels' => $labels,
       'hierarchical' => true,
       'description' => 'wpblog reviews filterable by genre',
       'supports' => array('title', 'editor', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
       'taxonomies' => array('genres'),
       'public' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'menu_position' => 5,
       'menu_icon' => 'dashicons-format-audio',
       'show_in_nav_menus' => true,
       'publicly_queryable' => true,
       'exclude_from_search' => false,
       'has_archive' => true,
       'query_var' => true,
       'can_export' => true,
       'rewrite' => true,
       'capability_type' => 'post'
   );
   register_post_type('wpblog_review', $args);
}
 
add_action('init', 'register_wpblog_review');



function create_wpblog_review_pages()
 {
  //post status and options
   $post = array(
         'comment_status' => 'open',
         'ping_status' =>  'closed' ,
         'post_date' => date('Y-m-d H:i:s'),
         'post_name' => 'wpblog_review',
         'post_status' => 'publish' ,
         'post_title' => 'wpblog Reviews',
         'post_type' => 'page',
   );
   //insert page and save the id
   $newvalue = wp_insert_post( $post, false );
   //save the id in the database
   update_option( 'mrpage', $newvalue );
 }
// // Activates function if plugin is activated
register_activation_hook( __FILE__, 'create_wpblog_review_pages');


https://www.wpblog.com/how-to-create-a-wordpress-plugin/