<?php /*
Plugin Name: flex_carousel
Description: Lazy load background images that are in external CSS files. 
Author: Ahmed Ali Tariq
Author URI: https://www.mensbasketballhoopscoop.com/

Version: 1.0.4
Text Domain: flex_slider
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
* Lazy Optimization main plugin file.
*/


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/*=====================
Check wordpress version
========================*/
if( version_compare( get_bloginfo('version'), ' 5.5.1,', '<' )  ){
    $meggase = 'Need Wordpress version 5.0 or higher';
    die($meggase);
}
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_FILE', __FILE__);
if(!class_exists('flex_slider_dev')):
class flex_slider_dev{
public function __construct(){

add_action('wp_print_scripts',    array(__CLASS__, 'flex_slider_scripts'));
        add_action('wp_print_styles', array(__CLASS__, 'flex_slider_styles'));
       add_action('init', array($this, 'flex_slider_flexslider'));
        add_shortcode('flex-slider', array($this, 'flex_slider_shortcode'));
          add_theme_support('post-thumbnails', array($this, 'flex_slider_shortcode'));
            add_image_size('thum-flx', array('thum-flx', 600, 280, true));
    }

public function flex_slider_flexslider() {

   


    /**
     * Post Type: FlexSliders.
     */

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
        "supports" => [ "title", "editor", "thumbnail", "custom-fields", "comments" ],
        "taxonomies" => [ "category", "post_tag" ],
    ];

    register_post_type( "flex-slider", $args );




    
}
public function flex_slider_styles() {
    // registrar
    wp_register_style('flex_slider_flx_styles', plugins_url('css/flexslider.css', __FILE__));
   // wp_register_style('flex_slider_flx_fonts', plugins_url('css/fonts/flexslider-icon.woff', __FILE__));
 
    // colocar
    wp_enqueue_style('flex_slider_flx_styles');
      //wp_enqueue_style('flex_slider_flx_fonts');
}
public function flex_slider_scripts() {
    if (!is_admin()) {
        // registrar
        // en esta función registramos jquery.flexslider.js y a demás la libreria jquery desde el core de WordPress
        wp_deregister_script('flex_slider_flx_script');
        
        wp_register_script('flex_slider_flx_script', plugins_url('js/jquery.flexslider.js', __FILE__), array( 'jquery' ));
      
        wp_register_script('flex_slider_scripts', plugins_url('js/scripts.js'));
 
      




    }
}
public function flex_slider_shortcode($type='thum-flx') {
    $args = array(
        'post_type' => 'flex-slider',
        'posts_per_page' => -1
    );
    $result = '<div class=" flexslider">';
      
    $result .= '<ul class="slides">';
 
    // el loop
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
 
        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
        $result .= '<li>';
        $result .= '<img alt="'.get_the_title().'" src="'. $the_url[0] . '" />';

        $result .= '</li>';
    }
    $result .= '</ul>';
    $result .='</div>';
    return $result;
}

}
new flex_slider_dev();


endif;
