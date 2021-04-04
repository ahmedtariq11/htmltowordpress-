<div class="partners_Section_area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single_a_me_list owl-carousel">
   <?php  $posts = new WP_Query( array( 'post_type' => 'partner' , 'order' => 'ASC','post_per_page' =>'-1') );
while($posts->have_posts()) : $posts->the_post();?>
              
                
           

                        <div class="single_partners_logo">
                            <a href="#">  <?php the_post_thumbnail('partner');?></a>
                        </div>
                       <?php endwhile ;?>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- partners_Section_area -->
    
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Our Location</h4>
                        <div class="footer_widget_content para_default">
                          
                              

                                               <?php wp_nav_menu(array(
                 'theme_location' => 'footer3',
                 'menu_class'=>'contact_info',
                  'before_link'=>'<span>'
               
                 
                
                 
                 
                
               
                 
                ));
                ?>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Company</h4>
                        <div class="footer_widget_content para_default">
                                     <?php wp_nav_menu(array(
                 'theme_location' => 'footer1',
               
                 'container' => '<ul>',

                  'link_before'    => '<span class="my-special-class">',
      'link_after'     => '</span>'
                 
                
               
                 
                ));
                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Useful Links</h4>
                        <div class="footer_widget_content para_default">
                         <?php wp_nav_menu(array(
                 'theme_location' => 'footer2',
               
                 'container' => '<ul>',
                 
                
               
                 
                ));
                ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <div class="footer_widget_content para_default">
                              <?php  $posts = new WP_Query( array( 'post_type' => 'newsletter' , 'order' => 'ASC','post_per_page' =>'-1') );
while($posts->have_posts()) : $posts->the_post();?>
                <p><?php the_content();?></p>
                
            <?php endwhile ;?>
                            <div class="Newsletter_mail_search">
                                <form action="#" method="post">
                                    <div class="icon-addon addon-md">
                                        <i class="fa fa-paper-plane"></i> <input class="form-control" id="email" placeholder="Email Address" type="text">
                                    </div>
                                </form>
                            </div>
                            <ul class="footer_social_icon">
                       
               <?php  dynamic_sidebar( 'sidebar-1' ); ?></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">

       
                <p><?php  get_option( 'footer_option_name' ); ?></p>
          
            </div>
        </div>
    </footer>

    <!--jquery.min.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/jquery.min.js" type="text/javascript"></script> 

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr and waypoints -->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/modernizr.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/waypoints.min.js" type="text/javascript"></script> 

    <!--bootstrap js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--plugins js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/plugins.js" type="text/javascript"></script> 

    <!--scrollup js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/jquery.scrollUp.min.js" type="text/javascript"></script> 

    <!--gmaps-->
    <script src="<?php echo get_template_directory_uri();  ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY"></script> 
    <script src="assets/js/gmaps.js" type="text/javascript"></script> 

    <!--jquery.fancybox.min.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/jquery.fancybox.min.js" type="text/javascript"></script>

    <!--jquery.magnific-popup.min.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <!--isotope.pkgd.min.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/isotope.pkgd.min.js" type="text/javascript"></script> 

    <!--jquery counterup-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/counterup.min.js" type="text/javascript"></script> 

    <!--owl.carousel.min.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>

    <!--jquery.textillate.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/jquery.textillate.js" type="text/javascript"></script> 

    <!--mixitup.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/mixitup.js" type="text/javascript"></script> 

    <!--chart.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/chart.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/chart-active.js" type="text/javascript"></script> 

    <!--slider revolution scripts -->
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 

    <!-- slider revolution 5.0 extensions  -->
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.actions.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.migration.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri();  ?>/rs-plugin/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script> 

    <!-- custom.js-->
    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/custom.js" type="text/javascript"></script>
</body>

<!-- Mirrored from template.helloxpart.com/cinthia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 09:55:49 GMT -->
</html>
<?php wp_footer();?>
