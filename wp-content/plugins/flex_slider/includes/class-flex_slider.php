<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://wppb.me/
 * @since      1.0.0
 *
 * @package    Flex_slider
 * @subpackage Flex_slider/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Flex_slider
 * @subpackage Flex_slider/includes
 * @author     ahmed <ahmedtariqlife900@gmail.com>
 */

if(!class_exists('Flex_slider')):
class Flex_slider{
public function __construct(){
add_action('wp_print_scripts',    array(__CLASS__, 'flex_slider_scripts'));
        add_action('wp_print_styles', array(__CLASS__, 'flex_slider_styles'));
       add_action('init', array($this, 'flex_slider_flexslider'));
       }
public function flex_slider_flexslider() {
$labels = [
        "name" => __( "FlexSliders", "custom-post-type-ui" ),
        "singular_name" => __( "FlexSlider", "custom-post-type-ui" ),
    ];
 $args = [
        "label" => __( "FlexSliders", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "flex-slider", "with_front" => true ],
        "query_var" => true,
        "supports" => ["genesis-cpt-archives-settings", "thumbnail" , "custom-fields", "excerpt", "comments", "title", "editor" ],
        "taxonomies" => [ "category", "post_tag" ],
        "menu_icon" => ['dashicons-airplane'],
    ];

    register_post_type( "flex-slider", $args );
}
public function flex_slider_styles() {
    // registrar
    wp_register_style('flex_slider_flx_styles', PLUGIN_URL.'assets/css/flexslider.css', __FILE__);
    wp_register_style('flex_slider_flx_fonts', PLUGIN_URL.'assets/css/fonts/flexslider-icon.woff', __FILE__);
 wp_enqueue_style('flex_slider_flx_styles');
      wp_enqueue_style('flex_slider_flx_fonts');
}
public function flex_slider_scripts() {
    if (!is_admin()) {
        wp_deregister_script('flex_slider_flx_script');
        // 

        wp_register_script('flex_slider_flx_script', PLUGIN_URL."assets/js/jquery.flexslider.js", array( 'jquery' ));
         wp_deregister_script('flex_slider_scripts');
        wp_register_script('flex_slider_scripts', PLUGIN_URL."assets/js/scripts.js",  array( 'jquery' ));
        wp_enqueue_script('flex_slider_flx_script');
        wp_enqueue_script('flex_slider_scripts');
    }
}
}
new Flex_slider();
endif;



