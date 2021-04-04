<?php
   /*
   * This is our functions file
   */
   function cih_Learning_theme_setup() {
   add_theme_support('custom-logo');
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
       if ( function_exists( 'add_image_size' ) ) {
           add_image_size( 'ceo', 400, 300 );
           add_image_size( 'home-featured', 350, 250 );
           add_image_size( 'partner', 118, 90, true );
           add_image_size( 'post', 370, 265);
           add_image_size( 'grow_up', 370, 440);
            add_image_size( 'contact-us', 3700, 440,true);
            add_image_size( 'ourconsultant', 3700, 440,true);
             }add_filter('acf/settings/remove_wp_meta_box', '__return_false');
      add_theme_support( 'automatic-feed-links' );
       add_theme_support( 'title-tag' );
       add_theme_support( 'post-thumbnails' );
       set_post_thumbnail_size( 825, 510, true );
   add_theme_support( 'post-formats', array(
           'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
       ) );
       add_theme_support( 'custom-logo', array(
           'height'      => 248,
           'width'       => 248,
           'flex-height' => true,
       ) );
   add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption','custom-fields' ) );
       // add_theme_support('custom-fields', array('page','post'));
   
       register_nav_menus( array(
           'primary'   => esc_html__( 'Primary Menu', 'wplearning' )
   
       ) );
   
        register_nav_menus( array(
           'footer1'   => __( 'Footer Menu1', 'wplearning' )
   
       ) );
   
           register_nav_menus( array(
           'footer2'   => __( 'Footer Menu2', 'wplearning' )
   
       ) );
   
   
             register_nav_menus( array(
           'footer3'   => __( 'Footer Menu3', 'wplearning' )
   
       ) );
       $args = array (
           'default-image' => get_template_directory_uri().'/assets/img/header-1.jpg',
           'default-text-color'    => '000',
           'width'         => 1920,
           'height'        => 400,
           'flex-width'    => true,
           'flex-height'   => true,
       );
       add_theme_support( 'custom-header', $args );
   
   
   };
   add_action('after_setup_theme', 'cih_Learning_theme_setup');
   function avocado_content_width() {
   	// This variable is intended to be overruled from themes.
   	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
   	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
   	$GLOBALS['content_width'] = apply_filters( 'avocado_content_width', 640 );
   }
   add_action( 'after_setup_theme', 'avocado_content_width', 0 );
   require_once('wp-bootstrap-navwalker.php');
   
   
   
   //add_filter ('nav_menu_css_class','wpse265503_nav_li_class',10,4);
   
   function wpse265503_nav_li_class ($classes,$item,$args){
       if ($args->theme_location == 'primary') {
         $classes[] = '<ul class="dropdown-menu"></ul>';
     }
       return $classes;
       }
    function keepitsimple_register_sidebars(){
     $sidebar = array(
                "name" => "Top Right Sidebar",
                "id"   => "sidebar",
                "before_widget" => "",
                "after_widget" => "",
                "before_title" => "<h5>",
                "after_title" => "</h5>"
     );
   
    register_sidebar($sidebar);
   $menusocial = array(
                "name" => "Menu Social ",
                "id"   => "sidebar-1",
                "before_widget" => '<ul class="social social-color social-s %2$s">',
                "after_widget" => '</ul>',
               "before_title" => "",
                "after_title" => ""
     ); register_sidebar($menusocial);
    $consultantsocial = array(
                "name" => "Top Left Bar",
                "id"   => "sidebar-2",
                "before_widget" => "",
                "after_widget" => "",
                "before_title" => "<h5>",
                "after_title" => "</h5>"
     );
   
    register_sidebar($consultantsocial); $contact = array(
                "name" => "Consultant banner ",
                "id"   => "sidebar-3",
                "before_widget" => "",
                "after_widget" => "",
                "before_title" => "<h3>",
                "after_title" => "</h3>"
     );
   
    register_sidebar($contact);
   $footer1 = array(
                   "name" => "footer 1",
                   "id"   => "footer1",
                   "before_widget" => "<div>",
                   "after_widget" => "</div>",
                   "before_title" => "<h3>",
                   "after_title" => "</h3>"
        );
   
        register_sidebar($footer1);
   $footer2 = array(
                        "name" => "footer 2",
                        "id"   => "footer2",
                        "before_widget" => "<div>",
                        "after_widget" => "</div>",
                        "before_title" => "<h3>",
                        "after_title" => "</h3>"
             );
   
       register_sidebar($footer2);
    $footer3 = array(
                            "name" => "footer 3",
                            "id"   => "footer3",
                            "before_widget" => "<div>",
                            "after_widget" => "</div>",
                            "before_title" => "<h3>",
                            "after_title" => "</h3>"
                 );
    register_sidebar($footer3);
   
   }
   
   
   
   function wp_admin_scripts() {
   wp_enqueue_script('media-upload');
   wp_enqueue_script('thickbox');
   wp_register_script('my-upload', '/assets/js/media.js', array('jquery','media-upload','thickbox'));
   wp_enqueue_script('my-upload');
   }
   function my_admin_styles() {
   wp_enqueue_style('thickbox');
   }
   add_action('admin_print_scripts', 'wp_admin_scripts');
   add_action('admin_print_styles', 'my_admin_styles');
   
   
      add_action('widgets_init','keepitsimple_register_sidebars');
    function cptui_register_my_cpts_bottonmeu() {
   
       /**
        * Post Type: bottommenu.
        */$labels = [
           "name" => __( "bottommenu", "custom-post-type-ui" ),
           "singular_name" => __( "bottommenu", "custom-post-type-ui" ),
       ];
   
       $args = [
           "label" => __( "bottommenu", "custom-post-type-ui" ),
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
           "rewrite" => [ "slug" => "bottonmeu", "with_front" => true ],
           "query_var" => true,
           "supports" => [ "title", "editor", "thumbnail", "custom-fields","metabox" ],
       ];
   
       register_post_type( "bottonmeu", $args );
   }
   
   add_action( 'init', 'cptui_register_my_cpts_bottonmeu' );
   
   
   
   // Custom metabox
   function slider_custom_meta() {
       add_meta_box( 'slider_meta', __( 'Others Section', 'carnews' ), 'slider_meta_callback', '' );
   }
   add_action( 'add_meta_boxes', 'slider_custom_meta' );
   
   //field
   function slider_meta_callback( $post ) {
       wp_nonce_field( basename( __FILE__ ), 'slider_nonce' );
       $slider_stored_meta = get_post_meta( $post->ID );
       ?>
<input type="text" name="meta-subtitle-slider" value="<?php if ( isset ( $slider_stored_meta['meta-subtitle-slider'] ) ) echo $slider_stored_meta['meta-subtitle-slider'][0]; ?>" style="width:100%;font-size:16px; margin-bottom: 15px;" placeholder="Enter Sub Title Here">
<?php
   }
   
   //save field value
   function slider_meta_save( $post_id ) {
    
       // Checks save status
       $is_autosave = wp_is_post_autosave( $post_id );
       $is_revision = wp_is_post_revision( $post_id );
       $is_valid_nonce = ( isset( $_POST[ 'slider_nonce' ] ) && wp_verify_nonce( $_POST[ 'slider_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    
       // Exits script depending on save status
       if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
           return;
       }
    
       // Checks for input and sanitizes/saves if needed
       if( isset( $_POST[ 'meta-subtitle-slider' ] ) ) {
           update_post_meta( $post_id, 'meta-subtitle-slider', sanitize_text_field( $_POST[ 'meta-subtitle-slider' ] ) );
       }
   
        if( isset( $_POST[ 'meta-subtitle-slider' ] ) ) {
           update_post_meta( $post_id, 'meta[image]', sanitize_text_field( $_POST[ $meta['image'] ] ) );
       }
   
   
   }
   add_action( 'save_post', 'slider_meta_save' );
   
    ?>
<?php
if ( ! function_exists( 'post_pagination' ) ) :
function post_pagination() {
global $wp_query;
$pager = 999999999; // need an unlikely integer
echo paginate_links( array(
'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
'format' => '?paged=%#%',
'current' => max( 5, get_query_var('paged') ),
'total' => $wp_query->max_num_pages
) );
}
endif;
add_filter( 'logout_url', 'custom_logout_url' );
function custom_logout_url( $default )
{
return str_replace( 'wp-login', 'login', $default );
}
add_filter( 'login_url', 'custom_login_url' );
function custom_login_url( $default )
{
return str_replace( '', 'login', $default );
}
require_once get_template_directory() . '/inc/plugin-requires.php';
require_once(get_template_directory().'/inc/custom-widgets.php');
require get_template_directory() .'/inc/options.php';
//require_once(get_template_directory().'/inc/theme-options.php');
//require_once(get_template_directory().'/inc/theme-element.php');
require_once(get_template_directory().'/theme-options/cs-framework.php');
function remove_css_js_version( $src ) {
if( strpos( $src, '?ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );
function no_wordpress_errors(){
return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );
function artisansweb_remove_version() {
return '';
}
add_filter('the_generator', 'artisansweb_remove_version');
add_action( 'init', 'disable_emojis' );
function disable_emojis() {
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');  
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0); 
remove_action('wp_head', 'parent_post_rel_link', 10, 0); 
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); 
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action ('template_redirect', 'wp_shortlink_header', 11, 0);
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action('wp_head', 'noindex', 1);
remove_action('welcome_panel', 'wp_welcome_panel');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
add_filter('embed_oembed_discover', '__return_false');
add_action( 'wp_dashboard_setup', function()
{
remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
} );
function cry_clean_header_hook(){
wp_deregister_script( 'comment-reply' );
}
add_action('init','cry_clean_header_hook');
function speed_stop_loading_wp_embed() {
if (!is_admin()) {
wp_deregister_script('wp-embed');
}
}
add_action('init', 'speed_stop_loading_wp_embed');
// Disable Self Pingback
function disable_pingback( &$links ) {
foreach ( $links as $l => $link )
if ( 0 === strpos( $link, get_option( 'home' ) ) )
unset($links[$l]);
}
add_action( 'pre_ping', 'disable_pingback' );
function disable_emojis1() {
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis1' );
add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
}
function remove_update_notifications( $value ) {
if ( isset( $value ) && is_object( $value ) ) {
unset( $value->response[ 'js_composer/js_composer.php' ] );
}
return $value;
}
add_filter( 'site_transient_update_plugins', 'remove_update_notifications');
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
add_filter( 'jpeg_quality', create_function( '', 'return 80;' ) );