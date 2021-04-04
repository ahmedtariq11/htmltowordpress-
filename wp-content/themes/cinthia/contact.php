<?php 


/* Template Name:contact */
?>




<?php get_header();?>
 <?php  if(cs_get_option('contactformbg')!= ''):?>
 <div class="page_title_banner not_found_title_bg" style="background-image:url('<?php echo esc_url( cs_get_option( 'contactform' )); ?>')">
   
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                 <?php
                    while(have_posts()){
                        the_post();
                ?>
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active"><?php the_title();?></li>
                </ul>
                 <?php
                    }
                ?>
            </div>
        </div><!--container-->
    </div><!--page_title_banner-->
 <?php endif;?>



    <div class="contact_page_get_start_area">
        <div class="container">
            <div class="row">
                <div class="make_an_appoinment_area get_start_areA">
                      <?php $menu3=cs_get_option('select_contact Form');
   if( $menu3 === 'contact_form_1'){ ?>
                    <div class="col-md-12">
                        <h3 class="title_get_start text-center">Get Started?</h3>
                    </div>
                        
                    <form action="http://template.helloxpart.com/cinthia/contact1.php" method="post" onsubmit="alert('Thank you for your feedback!');">
                          <?php echo do_shortcode( '[contact-form-7 id="254" title="quote"]' );?>
                    </form>

             <?php }
        else { ?>
                 <form action="http://template.helloxpart.com/cinthia/contact1.php" method="post" onsubmit="alert('Thank you for your feedback!');">
                          <?php echo do_shortcode( '[contact-form-7 id="248" title="newsletter"]' );?>
                    </form>
  <?php }
         ?>

                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--contact_page_get_start_area-->

    <div id="home1_newsletter">
        <div class="container">
            <div class="home1_newsletter">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="home1_newsletter_text">
                            <h2 class="banner_effect">Sign Up for Newsletter !</h2>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="home1_newsletter_input">
                            <form action="#" method="post">
                                <div class="Subscribe_main">
                                    <div class="Subscribe_main_input">
                                        <input type="text" class="form-control" placeholder="Enter Your Email">
                                        <input type="submit" class="Subscribe_btn" name="Subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--home1_newsletter-->
        </div><!--container-->
    </div><!--home1_newsletter-->

    <?php get_footer();?>






