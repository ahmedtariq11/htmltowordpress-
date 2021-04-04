<?php /* Template Name:About us */?>
<?php get_header();?>
<?php 
   $aboutdetail=get_field('aboutdetail');
   
   
   ?>
<div class="page_title_banner blog_grid_title_bg" style="background-image: url('<?php echo $blog['blogimages']['url']?>')">
   <div class="page_title_banner_overlay"></div>
   <div class="container">
      <div class="page_title_banner_text text-center">
         <ul class="breadcrumb">
            <li><a href="<?php esc_url('/');?>"><?php echo $aboutdetail['aboutbreadcumb']?></a></li>
            <li><a href="#"><?php echo $aboutdetail['aboutbreadtitle']?></a></li>
            <li class="active"><?php the_title();?></li>
         </ul>
      </div>
   </div>
   <!--container-->
</div>
<!-- page_title_banner -->
<?php  if(cs_get_option('teamhide')!= ''):?>
<div class="team_page_section_area">
   <div class="container">
      <div class="section_title text-center">
         <h2>Our Consultants</h2>
      </div>
      <div class="team_page_section_list">
         <div class="row">
            <?php
               global $post;
                   $i=0;
               
               $posts = new WP_Query( array( 'post_type' => 'ourconsultant' , 'order' => 'ASC','post_per_page' =>'-1') );
               while($posts->have_posts()) : $posts->the_post();
               
               
                
               
               
               
               ?>
            <div class="col-md-4 col-sm-6">
               <div class="single_team_Consultants text-center">
                  <?php the_post_thumbnail();
                     $i++;
                     
                     
                     ?>
                  <div class="team_consult_overlay">
                     <div class="top_consult_content">
                        <h4><a href="team-details.html"><?php the_title();?></a></h4>
                        <h4><a href="team-details.html"><?php echo $m_name_subtitle;?></a></h4>
                        <p><?php the_excerpt();?></p>
                     </div>
                     <ul class="bottom_consult_content">
                        <li>
                           <a class="fa fa-facebook" href="<?php echo esc_attr( get_post_meta(get_the_ID(), 'facebook' ,true) ); ?>"></a>
                           <a class="fa fa-fa fa-instagram" href="<?php echo esc_attr( get_post_meta( get_the_ID(),'instagram',true) ); ?>"></a>
                           <a class="fa fa-fa fa-twitter" href="<?php echo esc_attr( get_post_meta(get_the_ID(), 'twitter' ,true) ); ?>"></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- col-md-4 -->
            <?php endwhile;?>
         </div>
         <!-- row -->
      </div>
      <!-- team_page_section_list -->
   </div>
   <!-- container -->
</div>
<!-- team_page_section_area -->
<?php endif;?>
<div class="about_page_tab_section_area">
   <div class="container">
      <div class="row">
         <div class="about_us_tab_area">
            <div class="tab_menu_s_p_two">
               <div class="col-md-12">
                  <?php if ( $posts->have_posts() ) : ?>
                  <ul class="tab_button_service">
                     <?php $posts = new WP_Query( array( 'post_type' => 'about_us_tabs', 'order' => 'ASC' ,'posts_per_page' => -1 ) ); ?>
                     <?php 
                        $i = 0;
                        while ( $posts->have_posts() ) : $posts->the_post(); 
                            $i++;
                        ?>
                     <li role="presentation" class="ta_button_Bg2-<?php the_ID(); ?> <?php if($i==1) { echo 'active'; }?>">
                        <a href="#<?php echo $i ?>" aria-controls="<?php echo $i ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
                     </li>
                     <?php  endwhile; wp_reset_query(); ?>
                  </ul>
                  <!--tab_button_service-->
               </div>
               <!--col-md-12-->
               <?php endif;?>
               <div class="tab-content">
                  <?php 
                     $i=0;?>
                  <?php 
                     $posts = new WP_Query( array( 'post_type' => 'about_us_tabs' , 'order' => 'ASC','post_per_page' =>-1) );
                     while($posts->have_posts()) : $posts->the_post(); ?>
                  <?php $i++;?>
                  <div role="tabpanel"   class="tab-pane fade in <?php if($i==1) {echo 'active';}?> "  id="<?php echo $i; ?>">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="col-md-6">
                              <div class="tab_text_ser para_default">
                                 <p><?php the_content();?>.</p>
                              </div>
                              <!--tab_text_ser para_default-->
                           </div>
                           <!--col-md-6-->
                        </div>
                        <!--col-md-12-->
                     </div>
                     <!--row-->
                  </div>
                  <!--tab_panel-->
                  <?php  endwhile; ?>
               </div>
               <!--tab_content-->
            </div>
            <!--tab_menu_s_p_two-->
         </div>
         <!--about_us_tab_area-->
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</div>
<!-- about_page_tab_section_area -->
<?php get_footer();?>