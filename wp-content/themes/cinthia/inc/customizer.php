<?php if (!function_exists( 'ecom_customizer')) {

/* Customizer Main */
function ecom_customizer($wp_customize) {

    $wp_customize->remove_section('nav');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('title_tagline');
    $wp_customize->remove_panel('widgets');
    
    /* ================================================================= */
    /* ------------------------ Panel :: Header ------------------------ */
    /* ================================================================= */
    $wp_customize->add_panel('panel_1', array(
        'priority' => 9,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Header', 'carnews'),
        'description' => 'dddd',
    )); 

    
    /* ======================== section ======================== */
    $wp_customize -> add_section('section_1', array(
        'title'     => 'Logos',
        'priority'  => 5,
        'panel' => 'panel_1'
    ));
    
    /* ----------- settings and control ----------- */
    $wp_customize -> add_setting('logo', array(
        'default'   => '',
        'transport' => 'refresh'
    ));     
    $wp_customize -> add_control(
        new WP_Customize_Image_Control($wp_customize,'logo',array(
            'section'   => 'section_1',
            'label'     => 'Upload Your Logo'
        ))
    );
    

    /* ======================== section ======================== */
    $wp_customize -> add_section('section_2', array(
        'title'     => 'Favicon',
        'priority'  => 6,
        'panel' => 'panel_1'
    ));

    /* ----------- settings and control ----------- */
    $wp_customize -> add_setting('favicon', array(
        'default'   => '',
        'transport' => 'refresh'
    ));     
    $wp_customize -> add_control(
        new WP_Customize_Image_Control($wp_customize,'favicon',array(
            'section'   => 'section_2',
            'label'     => 'Upload Your Favicon'
        ))
    );


    /* ======================== section ======================== */
    $wp_customize -> add_section('section_3', array(
        'title'     => 'Header Text',
        'priority'  => 7,
        'panel' => 'panel_1'
    ));
    /* ----------- settings and control ----------- */

    $wp_customize -> add_setting('Home_Text', array(
        'default'   => '',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control('Home_Text', array(
        'section'   => 'section_3',
        'label'     => 'Home_Text ',
        'type'      => 'text'
    )); 


    $wp_customize -> add_setting('header_email', array(
        'default'   => '',
        'transport' => 'postMessage'
    ));
    $wp_customize -> add_control('header_email', array(
        'section'   => 'section_3',
        'label'     => 'Header Email Address ',
        'type'      => 'text'
    )); 


    /* ================================================================= */
    /* ------------------------ Panel :: Header ------------------------ */
    /* ================================================================= */
    $wp_customize->add_panel('panel_2', array(
        'priority' => 9,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Header Color', 'ecom'),
        'description' => 'dddd',
    )); 


    /* ======================== section ======================== */
    $wp_customize -> add_section('section_4', array(
        'title'     => 'Header Color',
        'priority'  => 9,
        'panel' => 'panel_2'
    ));
    /* ----------- settings and control ----------- */
    $wp_customize -> add_setting('header_bg_color', array(
        'default'   => '#ffffff ',
        'transport' => 'postMessage',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control(
        new WP_Customize_color_Control($wp_customize,'header_bg_color',array(
            'section'   => 'section_4',
            'label'     => 'Header Background Color'
        ))
    );




      $wp_customize->add_panel('panel_3', array(
        'priority' => 9,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __(' Top Bar Color', 'ecom'),
        'description' => 'dddd',
    )); 



 $wp_customize->add_setting('owt_color_picker_id', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => "Book Now Background",
        'section'  => 'owt_main_section',
        'settings' => 'owt_color_picker_id',
    )));

    /* ======================== section ======================== */
    $wp_customize -> add_section('section_5', array(
        'title'     => 'Top Bar Color',
        'priority'  => 9,
        'panel' => 'panel_3'
    ));
    /* ----------- settings and control ----------- */
    $wp_customize -> add_setting('Top_bg_color', array(
        'default'   => '#ffffff ',
        'transport' => 'postMessage',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control(
        new WP_Customize_color_Control($wp_customize,'Top_bg_color',array(
            'section'   => 'section_5',
            'label'     => 'Top Background Color'
        ))
    );




      $wp_customize->add_panel('panel_4', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __(' Footer Bar Color', 'ecom'),
        'description' => 'dddd',
    )); 


        $wp_customize -> add_section('section_6', array(
        'title'     => 'Footer Bar Color',
        'priority'  => 10,
        'panel' => 'panel_4'
    ));
    /* ----------- settings and control ----------- */
    $wp_customize -> add_setting('Footer_bg_color', array(
        'default'   => '#ffffff ',
        'transport' => 'postMessage',
        'transport' => 'refresh'
    ));

    $wp_customize -> add_setting('Footer_bottom_color', array(
        'default'   => '#ffffff ',
        'transport' => 'postMessage',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control(
        new WP_Customize_color_Control($wp_customize,'Footer_bg_color',array(
            'section'   => 'section_6',
            'label'     => 'Footer Background Color'
        ))
    );

    $wp_customize -> add_control(
        new WP_Customize_color_Control($wp_customize,'Footer_bottom_color',array(
            'section'   => 'section_6',
            'label'     => 'Footer Background Color'
        ))
    );

    
}
}
add_action('customize_register', 'ecom_customizer');