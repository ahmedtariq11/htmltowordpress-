<?php
/*
Plugin Name: Lazy Slider
Description: Lazy load background images that are in external CSS files. 
Author: Ahmed Ali Tariq
Author URI: https://wphowknow.com/

Version: 1.0.4
Text Domain: lazy_slider
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
    $meggase = 'Need Wordpress version 4.0 or higher';
    die($meggase);
}
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_FILE', __FILE__);
if(!class_exists('lazy_slider_dev')):
class lazy_slider_dev{
public function __construct(){
		add_action('init', 	array(__CLASS__, 'lazy_slider_3dsliders'),0);
		add_action('wp_enqueue_scripts', array(__CLASS__, 'lazy_slider_scripts'));
		add_shortcode('lazy-slider', array(__CLASS__, 'lazy_slider_shortcode'));
		}
public  function lazy_slider_scripts(){
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery');

		wp_enqueue_style('lazy_slider_style', PLUGIN_URL."css/style.css");
		
			wp_enqueue_style('lazy_slider_bootstrap', PLUGIN_URL."css/bootstrap.css");
		wp_enqueue_script('lazy_slider_JR3DCarousel', PLUGIN_URL."js/JR3DCarousel.min.js", array('jquery'),false);
			wp_enqueue_script('lazy_slider_custom', PLUGIN_URL."js/custom.js", array('jquery'),false);
				//wp_enqueue_script('lazy_slider_jquery-1.8.0.min', PLUGIN_URL."js/jquery-1.8.0.min.js");
		
	}
public  function lazy_slider_shortcode(){
?>
	<div class="container">
		
		

			<div class="jR3DCarouselGallery">

			<div class="carousel-demo">
		
				<?php 
				$slider=new WP_Query(array('post_type' => '3dsliders'));?>
				<?php 
	if($slider->have_posts()):
		while($slider->have_posts()):
			$slider->the_post();
			?>
					 <div class="slide">
				
			<?php  echo the_post_thumbnail();   ?>

				</div>
			<?php 	endwhile;?>
	<?php endif; ?>
			</div>

</div>

		
	<?php 
}
// Register Custom Post Type

function lazy_slider_3dsliders() {

	/**
	 * Post Type: 3DSLIDER.
	 */

	$labels = [
		"name" => __( "3DSLIDER", "custom-post-type-ui" ),
		"singular_name" => __( "3DSLIDERS", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "3DSLIDER", "custom-post-type-ui" ),
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
		"rewrite" => [ "slug" => "3dsliders", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
	];

	register_post_type( "3dsliders", $args );
}




}
new lazy_slider_dev();


endif;

