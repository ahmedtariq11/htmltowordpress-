

<?php 

function my_admin_menu () {
   $page_title = 'Theme Settings Page';
   $menu_title = 'Theme Settings';
   $capability = 'edit_posts';
   $menu_slug = 'theme_options_page';
   $function = 'my_theme_settings_page';
   $icon_url = '';
   $position = 110;
   $shows=
   ['post', 'page'];

   add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
}

add_action('admin_menu', 'my_admin_menu');



function my_theme_settings_page(){

/*** New section ***/

?>
   <h1>Theme Settings Page</h1>
   <?php settings_errors(); ?> 

   <form method="post" action="options.php">
       <?php settings_fields("ff_theme_options");?>
       <?php do_settings_sections('theme_options')?>
       <?php submit_button();?>
   </form>

<?php
}

/*** Options fields ***/

add_action('admin_init','ff_custom_setting');
function ff_custom_setting(){
    register_setting('ff_theme_options', 'footer_field');
    register_setting('ff_theme_options', 'twitter_field');
        register_setting('ff_theme_options', 'facebook_field');
            register_setting('ff_theme_options', 'instagram_field');
    register_setting("ff_theme_options", "logo", "handle_logo_upload"); 
    add_settings_section('ff_theme_options','Theme Options', null, 'theme_options');
    add_settings_field('theme-phone','Footer Text','theme_footer_func', 'theme_options','ff_theme_options');
        add_settings_field('theme-twitter','Twitter Url','theme_twitter_func', 'theme_options','ff_theme_options');
        add_settings_field('theme-facebook','Facebook Url','theme_facebook_func', 'theme_options','ff_theme_options');
          add_settings_field('theme-instagram','Instagram Url','theme_instagram_func', 'theme_options','ff_theme_options');
    add_settings_field('logo','Website Logo','logo_display', 'theme_options','ff_theme_options');
}

function ff_theme_options(){
    echo 'Add your theme options';
}
function theme_footer_func(){
    $footer = esc_attr(get_option( 'footer_field' )); 
    echo '<input type="text" name="footer_field" value="'.$footer.'" placeholder="Your Footer here">';

}
function theme_twitter_func(){
    $twitter = esc_attr(get_option( 'twitter_field' )); 
    echo '<input type="text" name="twitter_field" value="'.$twitter.'" placeholder="Your Twitter here">';
}
function theme_facebook_func(){
    $facebook = esc_attr(get_option( 'facebook_field' )); 
    echo '<input type="text" name="facebook_field" value="'.$facebook.'" placeholder="Your facebook here">';
}

function theme_instagram_func(){
    $instagram = esc_attr(get_option( 'instagram_field' )); 
    echo '<input type="text" name="instagram_field" value="'.$instagram.'" placeholder="Your Instagram here">';
}
function logo_display()
{
?>
    <input type="file" name="logo" /> 
    <?php echo get_option('logo'); ?>
<?php
}


function handle_logo_upload($option)
{
  if(!empty($_FILES["logo"]["tmp_name"]))
  {
    $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
    $temp = $urls["url"];
    return $temp;  
    echo '<img src="'.$src['sizes']['thumbnail'].'">';
  }
 
  return $option;
}