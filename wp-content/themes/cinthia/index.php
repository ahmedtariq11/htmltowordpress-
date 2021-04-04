
<?php
/* Template Name:front-page */
?>

<?php get_header(); ?>
   
<div id="home_default_rev_slider_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="focus-parallax" data-source="gallery" style="background-color:transparent;padding:0px;">
    <?php
    $posts = new WP_Query(['post_type' => 'slider', 'order' => 'ASC', 'post_per_page' => '-1']);
    while ($posts->have_posts()):
        $posts->the_post(); ?>
<?php $i = 1; ?>
        <div id="home_default" class="rev_slider fullscreenbanner" style="display:none;">

          
            <ul>
               

                <li data-index="digital_slide_2-<?php echo $i; ?>"   data-transition="crossfade=<?php echo $i; ?>" data-slotamount="default-<?php echo $i; ?>"  data-easein="default-<?php echo $i; ?>" data-easeout="default=<?php echo $i; ?>" data-masterspeed="500-<?php $i++; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Focus">
   
                         <img src="<?php echo wp_get_attachment_url(
                             get_post_thumbnail_id($post->ID),
                             'full'
                         ); ?>" alt=""  data-lazyload="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat-<?php echo $i; ?>" data-bgparallax="off" class="rev-slidebg-<?php echo $i; ?>" data-no-retina>
<?php $i++; ?>
                    <div class="tp-caption  tp-resizeme" 
                        id="slide-2-layer-1" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['-100','-80','-60','-50']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6;font-size: 85px; white-space: nowrap;text-transform:left;color: #000;font-family: 'Montserrat', sans-serif;font-weight: 700;">Positive
                    </div>
                    
                     <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-2" 
                        data-x="['left','left','left','left']" data-hoffset="['360','345','260','220']" 
                        data-y="['center','center','center','center']" data-voffset="['-100','-80','-60','-50']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6;font-size: 85px; white-space: nowrap;text-transform:left;color: #008cb5;font-family: 'Montserrat', sans-serif;font-weight: 700;">Thinking 
                    </div>

                    <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-3" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6; white-space: nowrap;text-transform:left;color: #000000;font-family: 'Montserrat', sans-serif;font-weight: 700;"><?php the_title(); ?>
                    </div>

                     <div class="tp-caption rev-btn " 
                        id="slide-2-layer-4" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['110','90','70','60']"
                        data-fontsize="['18','15','14','13']" 
                        data-lineheight="['18','15','14','13']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="on"
                        data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'  
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[14,13,12,12]" 
                        data-paddingright="[30,30,25,20]" 
                        data-paddingbottom="[14,12,13,12]" 
                        data-paddingleft="[30,30,25,20]" 
                        style="z-index: 8; white-space: nowrap; font-size: 18px; line-height: 15px; font-weight: 600; color: #fff;font-family: 'Montserrat', sans-serif;font-weight: 600;background-color:#008cb5;border-color:#008cb5;border-style:solid;border-width:1px;border-radius:30px 30px 30px 30px;letter-spacing:1px;">
                        <?php the_content(); ?>
                    </div>
                </li> 
            </ul>

        </div>
    
         <?php
    endwhile;
    ?>
    </div><!-- END REVOLUTION SLIDER -->
    

    

<?php include_once "services.php"; ?>

<?php include_once "counter.php"; ?>
<?php include_once 'projects.php'; ?>

<?php include_once 'Faqs.php'; ?>

<?php include_once 'grows.php'; ?>

<?php include_once 'consultancy.php'; ?>
<?php include_once 'teams.php'; ?>
 <?php if (cs_get_option('abouthide') != ''): ?>
<div class="about_section_area">
        <div class="container-fluid">
            <div class="row">
                  <?php
                  $posts = new WP_Query(['post_type' => 'services', 'order' => 'ASC', 'post_per_page' => '-1']);
                  while ($posts->have_posts()):
                      $posts->the_post(); ?>
                <div class="col-md-4 col-sm-6">
                     
                    <div class="about_Single_item para_default text-center">
                        
                        <i class="flaticon-pie-chart"></i>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>

                </div><!--col-md-4 -->
                  <?php wp_reset_postdata(); ?> 

               
<?php
                  endwhile;
                  ?>
              
              
            
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
    <?php endif; ?>



    <div class="request_call_back_area request_call_Bg">
        <div class="request_call_back_area_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="request_contact_details">
                       
                <div class="quick_contact_content quick_contact_content_about">
                            <?php dynamic_sidebar('sidebar-3'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="request_contact_area">
                        <h3 class="request_title_back">Request For Call Back</h3>
                        <div class="row">
                            <div class="quick_contact_content quick_contact_content_overly">
                                <form action="http://template.helloxpart.com/cinthia/contact1.php" method="post" onsubmit="alert('Thank you for your feedback!');">
                                  <?php echo do_shortcode('[contact-form-7 id="233" title="quote"]'); ?>

                                   >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- request_call_back_area-->

 <?php if (cs_get_option('bloghide') != '') { ?>

    <div class="latest_blog_section_area removeBg_latest_blog" style="background-color: <?php echo cs_get_option('blog_color_bg'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single_blog_item_area image_fulwidth text-center">
                        <div class="">
                            <div class="item single_blog_item_div para_default">
                                <h2><a href="#">Latest</a> <span>OFFICE NEWS</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc- dolor amet, consectetur adipiscingeiusmod dolor amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="single_blog_h_active owl-carousel">
                         <?php
                         $posts = new WP_Query(['post_type' => 'post', 'order' => 'ASC', 'post_per_page' => '-1']);
                         while ($posts->have_posts()):
                             $posts->the_post(); ?>
                        <div class="item single_blog_item_area para_default image_fulwidth text-center">
                         <?php the_post_thumbnail('post'); ?>
                            <h4 style="color: <?php echo cs_get_option('blog_color_text'); ?>"><?php the_title(); ?></h4>
                            
                            <p style="color: <?php echo cs_get_option('blog_color_desc'); ?>"><?php the_excerpt(); ?>.</p>
                        </div>

                    <?php
                         endwhile;
                         ?>
<?php } ?>
                       


                       

                    </div>
                </div>
            </div><!-- row-->
        </div><!-- container-->
    </div><!-- latest_blog_section_area-->


    <?php get_footer(); ?>
