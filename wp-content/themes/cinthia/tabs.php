
    
 
 <div class="about_page_tab_section_area">
        
        <div class="container">
      
            <div class="row">
                
                <div class="about_us_tab_area">
                     
                    <div class="tab_menu_s_p_two">
                     
                 <?php if ( $posts->have_posts() ) : ?>
                        <div class="col-md-12">
                          <?php if ( $posts->have_posts() ) : ?>
                            <ul class="tab_button_service">
                              
                                <?php 
$i=1;

                                     $posts = new WP_Query( array( 'post_type' => 'about_us_tabs' , 'order' => 'ASC','post_per_page' =>'-1') );
while($posts->have_posts()) : $posts->the_post();?>
                              <li role="presentation" <?php if ($i==1) { ?>class="ta_button_Bg2 active"<?php } ?>  >
        <a href="#<?php echo $i ?>" aria-controls="<?php echo $i ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
      </li>
        <?php $i++; endwhile; ?>

                           
                            </ul><!--tab_button_service-->
                        </div> <!--col-md-12-->
                       <?php endif;?>
                       <?php wp_reset_postdata();?>

                       <?php if ( $posts->have_posts() ) : ?>

                        <div class="tab-content">
                             <?php 
$i=1;

                                     $posts = new WP_Query( array( 'post_type' => 'about_us_tabs' , 'order' => 'ASC','post_per_page' =>'-1') );
while($posts->have_posts()) : $posts->the_post();?>

                            <div role="tabpanel"   class="tab-pane fade in  <?php if($i== 1) {echo 'active';}?> "  id="<?php echo $i ?>">
                                  
                                <div class="row">

                                    <div class="col-md-12">

                                       
                                        <div class="col-md-6">


                                            <div class="tab_text_ser para_default">

                  
                                               
                                                <p><?php the_content();?>.</p>
                                                 
                                              
                                            </div><!--tab_text_ser para_default-->
                                        </div><!--col-md-6-->

                                    </div><!--col-md-12-->

                                </div> <!--row-->

                            </div> <!--tab_panel-->
                            <?php $i++; endwhile; ?>

                           
                               
                                </div> <!--tab_content-->


 <?php endif;?>
<?php wp_reset_postdata();?>
                        
                    
                        
                    </div> <!--tab_menu_s_p_two-->
                    
                </div><!--about_us_tab_area-->
                 
            </div><!-- row -->
          
        </div><!-- container -->

    </div><!-- about_page_tab_section_area -->