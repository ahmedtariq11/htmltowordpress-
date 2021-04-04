<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<html class="no-js" <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" >
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <?php
         if ( !function_exists( 'wp_site_icon' ) ) {
           $favicon = cs_get_option('media-favicon');
           if ( (isset($favicon['url'])) && (trim($favicon['url']) != "" ) ) {
                 if (is_ssl()) {
                     $favicon_image_img = str_replace("http://", "https://", $favicon['url']);   
                 } else {
                     $favicon_image_img = $favicon['url'];
                 }
           ?>
      <link rel="shortcut icon" href="<?php echo esc_url($favicon_image_img); ?>" />
      <?php } ?>
      <?php } ?>
      <?php wp_head(); ?>
      <!-- title of site -->
      <title><?php bloginfo();?></title>
      <!-- google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
      <!-- favicon -->
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri();  ?>/images/favicon.ico" type="image/x-icon">
      <!--flaticon.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/flaticon.css">
      <!--font-awesome.min.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/font-awesome.min.css">
      <!--text-animation.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/animate.css">
      <!--animate.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/text-animation.css">
      <!--fancybox.min.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/jquery.fancybox.min.css">
      <!--fancybox.min.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/magnific-popup.min.css">
      <!--owl.carousel.min.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/owl.carousel.min.css">
      <!--slider revolution css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/rs-plugin/css/layers.css" type="text/css"/>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/rs-plugin/css/settings.css" type="text/css"/>
      <!--bootstrap.min.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/bootstrap.min.css">
      <!--plugins.css-->
      <link href="<?php echo get_template_directory_uri();  ?>/assets/css/plugins.css" rel="stylesheet">
      <!--icons.css-->
      <link href="<?php echo get_template_directory_uri();  ?>/assets/css/icons.css" rel="stylesheet">
      <!--menu-css.css-->
      <link href="<?php echo get_template_directory_uri();  ?>/assets/css/menu-css.css" rel="stylesheet">
      <!--style.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/main.css">
      <!--responsive.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/assets/css/responsive.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->   
   </head>
   <?php  //echo do_shortcode('[flex-slider]');   ?>
   <body class="cnt-home <?php echo implode(' ', get_body_class()); ?>">
      <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
      <!--Start Preloader-->
      <!--End Preloader-->
      <header id="header" class="header_areaa">
         <nav class="navbar extended">
            <?php  if(cs_get_option('topb')!= ''):?>
            <div class="top-bar gray-wrapper">
               <div class="container flex-it">
                  <div class="align-left moto_titlel">
                     <?php dynamic_sidebar('sidebar-2');?>
                  </div>
                  <div class="align-right text-right">
                     <ul class="icon-list list-inline mb-0">
                        <li>
                           <?php if(is_active_sidebar()):?>
                           <?php dynamic_sidebar('sidebar');?>
                           <?php endif;?> 
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <?php endif;?>
            <?php  if(cs_get_option('tophide')!= ''):?>
            <div class="container">
               <div class="navbar-header flex-it">
                  <div class="navbar-brand align-left">
                     <?php  if( has_custom_logo()) {?>
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo() ;  ?></a>
                  </div>
                  <?php  
                     } else {
                     
                        ?>
                  <a  href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  alt="logo" src="<?php echo esc_url( cs_get_option('logo') ); ?>"></a>
                  <?php }
                     ?>
                  <div class="align-right text-right">
                     <?php $the_query = new WP_Query( 'page_id=2' ); ?>
                     <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
                     <ul class="icon-list list-inline mb-0">
                        <li class="text-left">
                           <div class="feature feature-xs">
                              <?php
                                 $loc= get_post_meta(get_the_ID(), 'Loc', TRUE);  ?>
                              <span class="icon icon-color icon-s"><i class="flaticon <?php echo (cs_get_option('location_icon')) ?>"></i></span>
                              <?php   echo '<h6 class="mb-0">'.$loc.'</h6>'; ?>
                           </div>
                        </li>
                        <li class="text-left">
                           <div class="feature feature-xs">
                              <?php
                                 $time= get_post_meta(get_the_ID(), 'Time', TRUE); 
                                 
                                                                     echo '  <span class="icon icon-color icon-s"><i class="flaticon-time"></i></span>
                                 
                                 
                                                                   <h6 class="mb-0">' . $time . ' </h6>';
                                                                     ?>
                           </div>
                        </li>
                     </ul>
                     <?php wp_reset_postdata();?>
                     <?php endwhile;?>
                  </div>
                  <div class="nav-bars-wrapper">
                     <div class="nav-bars-inner">
                        <div class="nav-bars" data-target=".navbar-collapse" data-toggle="collapse">
                           <span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php endif;?>
            <?php  if(cs_get_option('header')!= ''):?>
            <?php $menu=cs_get_option('select_menu');
               if( $menu === 'header_menu_1'){ ?>
            <div class="nav-wrapper dark-wrapper inverse-text" style="background-color: <?php echo cs_get_option('header_color_bg'); ?>">
               <div class="container flex-it">
                  <div class="navbar-collapse collapse align-left">
                     <!--
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Demo Style 1</a></li>
                                    <li><a href="index-02.html">Home Demo Style 2</a></li>
                                </ul>
                            </li>
                        
                        
                        </ul>
                        <!--><?php if(has_nav_menu('primary')):?>
                     <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        
                        'items_wrap' => '<ul  id= "dropdown-menu %1$s"  class="nav navbar-nav  %2$s">%3$s</ul>',
                        
                        'depth' => '4',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                        
                        ));
                        ?>
                     <?php endif;?>
                  </div>
                  <div class="navbar-other">
                     <div class="align-right text-right">
                        <?php //dynamic_sidebar('sidebar-1');?>
                        <ul  class="social social-color social-s">
                           <?php if(cs_get_option('social_twitter') != '') : ?>
                           <li>
                              <a href="<?php  echo esc_url(cs_get_option( 'social_twitter' )); ?> "><i class=" <?php echo (cs_get_option('Twitter_icon')) ?>"></i></a>
                           </li>
                           <?php endif; ?>
                           <?php if(cs_get_option('social_facebook') != '') : ?>
                           <li>
                              <a href="<?php  echo esc_url(cs_get_option( 'social_facebook' )); ?> "><i class=" <?php echo (cs_get_option('Facebook_icon')) ?>"></i></a>
                           </li>
                           <?php endif; ?>
                           <li >
                              <a href="<?php  echo esc_url(cs_get_option( 'social_pinterest' )); ?> "><i class=" <?php echo (cs_get_option('Pinterest_icon')) ?>"></i></a></a>
                           </li>
                           <?php if(cs_get_option('social_linkedin') != '') : ?>
                           <li >
                              <a href="<?php  echo esc_url(cs_get_option( 'social_linkedin' )); ?>"><i class=" <?php echo (cs_get_option('Linkdin_icon')) ?>"></i></a></a>
                           </li>
                           <?php endif;?>
                           <?php if(cs_get_option('social_instagram') != '') : ?>
                           <li>
                              <a href="<?php  echo esc_url(cs_get_option( 'social_instagram' )); ?> "><i class=" <?php echo (cs_get_option('Instagram_icon')) ?>"></i></a>
                           </li>
                           <?php  endif;?>
                           <?php if(cs_get_option('social_youtube') != '') : ?>
                           <li>
                              <a href="<?php  echo esc_url(cs_get_option( 'social_youtube' )); ?> "><i class=" <?php echo (cs_get_option('Youtube_icon')) ?>"></i></a>
                           </li>
                           <?php  endif;?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <?php }
               else { ?>
            <div class="nav-wrapper dark-wrapper inverse-text">
               <div class="container flex-it">
                  <div class="navbar-collapse collapse align-center">
                     <?php  if( has_custom_logo()) {?>
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo() ;  ?></a>
                  </div>
                  <?php  
                     } else {
                     
                        ?>
                  <a  href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  alt="logo" src="<?php echo esc_url( cs_get_option('logo') ); ?>"></a>
                  <?php }
                     ?>
                  <!--
                     <ul class="nav navbar-nav">
                         <li>
                             <a href="#">Home</a>
                             <ul class="dropdown-menu">
                                 <li><a href="index.html">Home Demo Style 1</a></li>
                                 <li><a href="index-02.html">Home Demo Style 2</a></li>
                             </ul>
                         </li>
                     
                     
                     </ul>
                     
                     <!--><?php if(has_nav_menu('primary')):?>
                  <?php wp_nav_menu(array(
                     'theme_location' => 'primary',
                     
                     'items_wrap' => '<ul  id= "dropdown-menu %2$s"  class="nav navbar-nav  %2$s">%3$s</ul>',
                     
                     'depth' => '4',
                     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                     'walker'            => new WP_Bootstrap_Navwalker()
                     
                     ));
                     ?>
                  <?php endif;?>
               </div>
            </div>
            </div>
            <?php }
               ?>
            <?php  endif;?>
         </nav>
      </header>
      <!-- /header -->