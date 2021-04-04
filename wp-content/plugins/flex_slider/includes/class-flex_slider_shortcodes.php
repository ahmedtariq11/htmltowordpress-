
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
defined('ABSPATH') || die("Nice Try");
if(!class_exists('flex_slider_shortcodes')):
class flex_slider_shortcodes{
public function __construct(){
add_shortcode('flex-slider', array($this, 'flex_slider_shortcode'));
          add_theme_support('post-thumbnails', array($this, 'flex_slider_shortcode'));
            add_image_size('thum-flx', array('thum-flx', 600, 280, true));
         }
public function flex_slider_shortcode($type='thum-flx') {
$args = array(
        'post_type' => 'flex-slider',
        'posts_per_page' => -1
    );
    $result = '<div  id="slider" class=" flexslider">';
      $result .= '<ul class="slides">';
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
 
        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
        $result .= '<li>';
        $result .= '<img alt="'.sanitize_title(get_the_title()).'" src="'. $the_url[0] . '" />';

        $result .= '</li>';
    }
    $result .= '</ul>';
    $result .='</div>';
    return $result;}
}
new flex_slider_shortcodes();
endif;