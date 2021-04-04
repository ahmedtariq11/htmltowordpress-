<?php  if(cs_get_option('counterhide')!= ''):?>
<div class="Counter_section_area" style="background-color: <?php echo cs_get_option('counter_color_bg'); ?>">
   <div class="container">
      <div class="row">
         <?php  $posts = new WP_Query( array( 'post_type' => 'countersection' , 'order' => 'ASC','post_per_page' =>'-1') );
            while($posts->have_posts()) : $posts->the_post();?>
         <div class="col-md-3 col-sm-6">
            <div class="number_tem text-center">
               <span class="counter"  style="color: <?php echo cs_get_option('counter_color_desc'); ?>"><?php the_content();?></span>
               <h6  style="color: <?php echo cs_get_option('counter_color_text'); ?>"><?php the_title();?></h6>
            </div>
         </div>
         <?php   wp_reset_postdata();?>
         <?php endwhile;?>
      </div>
   </div>
   <!--.row-->
</div>
<!--.container-->
</div><!--.Counter_section_area-->
<?php endif;?>