<?php  if(cs_get_option('projectshide')!= ''):?>
<div class="complete_project_section" style="background-color: <?php echo cs_get_option('project_color_bg'); ?>">
   <div class="container">
      <div class="row">
         <div class="section_title text-center">
            <h2>Completed Projects</h2>
         </div>
         <!--section_title text-center-------->
      </div>
      <!--row-------->
      <div class="row">
         <div class="col-md-12">
            <div class="complete_project_active owl-carousel">
               <?php  $posts = new WP_Query( array( 'post_type' => 'completedprojects' , 'order' => 'ASC','post_per_page' =>'-1') );
                  while($posts->have_posts()) : $posts->the_post();?>
               <div class="single_blog_item_div image_fulwidth text-center">
                  <a href="#"><?php the_post_thumbnail('completedprojects');?></a>
                  <div class="single_bloG_item_content para_default">
                     <h3 style="color: <?php echo cs_get_option('project_color_text'); ?>"><?php the_title();?></h3>
                     <p style="color: <?php echo cs_get_option('project_color_desc'); ?>"><?php the_content();?></p>
                  </div>
                  <!--single_bloG_item_content para_default-------->
               </div>
               <!--single_blog_item_div image_fulwidth text-center-------->
               <?php   wp_reset_postdata();?>
               <?php endwhile;?>
            </div>
            <!--col md-12-------->
         </div>
         <!--complete_project_active owl-carouse------>
      </div>
      <!--row------>
   </div>
   <!--.container-->
</div>
<!--.complete_project_section-->
<?php endif;?>