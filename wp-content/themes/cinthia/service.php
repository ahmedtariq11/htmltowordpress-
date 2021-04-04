 <?php  if(cs_get_option('serviceshide')!= ''):?>


    <div class="our_service_section">
         
        <div class="container">

            <div class="row">
                <div class="section_title text-center">
                    <h2 style="font-size:  <?php echo cs_get_option('unique_typography_1'); ?>"></h2>

                </div>
            </div><!--row -->

            <div class="row">
                <div class="col-md-12">
                  
                    <div class="our_service_carousel_active owl-carousel">
                           <?php  $posts = new WP_Query( array( 'post_type' => 'our_services' , 'order' => 'ASC','post_per_page' =>'-1','taxonomy'=>'category') );
while($posts->have_posts()) : $posts->the_post();?>

                        <div class="item single_service_item_div text-center" style="background-color: <?php echo cs_get_option('service_color_bg'); ?>">
                            <i class="flaticon <?php echo cs_get_option('service_icon'); ?>"></i>
                            <div class="single_service_content para_default">
                                <h3 style="color: <?php echo cs_get_option('service_color_text'); ?>"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p style="color: <?php echo cs_get_option('service_color_desc'); ?>"><?php the_content();?>.</p>
                            </div>
                        </div><!--item -->
   <?php   wp_reset_postdata();?>
    <?php endwhile;?>
                    </div>
                  
                </div><!--col-md-12 -->
            </div><!--row -->



        </div><!--container -->
       
    </div><!--our_service_section -->
    <?php endif;?>










<?php  if(cs_get_option('servicesiconhide')!= ''):?>

   <div class="about_section_area">
        <div class="container-fluid">
            <div class="row">


    <?php 
    $grp_Sec1=cs_get_option('fields_group_1');
    if($grp_Sec1){
    foreach($grp_Sec1 as $grp_Sec1){?>

    
                <div class="col-md-4 col-sm-6" style="<?php echo   wp_get_attachment_image_src($grp_Sec1['fields_7'],'full')[0];?>"    <?php echo cs_get_option($grp_Sec1['fields_10']); ?>  >
                 

                   <div class="about_Single_item para_default text-center">
                    
                       <i class=" <?php echo cs_get_option($grp_Sec1['icon_service']); ?>"></i>
                         <img src="<?php echo   wp_get_attachment_image_src($grp_Sec1['fields_7'],'full')[0];?>">
                       
                          <h3  style="color: <?php echo cs_get_option($grp_Sec1['fields_12']); ?>"><?php echo esc_html($grp_Sec1['fields_5']);?></h3>
                        <p><?php echo esc_html($grp_Sec1['fields_6']);?></p>
                    </div>
                </div><!--col-md-4 -->

               <?php 
           }
       }
           ?>
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area --->
    <?php endif;?>