<?php
   function consult_section_1($attr){
   	
   
   	
   	
   	extract(
   	shortcode_atts(array(
   		'title_sec_1' => 'Eta ekta value',
   		'title_sec_desc_1' => 'Eta ekta Description',
   		'title_sec_desc_1_color' => '',
   		'title_sec_1_image' => '',
   	
   	
   	),$attr)
   	);
   	
   	
   	ob_start();
   	
   	?>
<div class="looking_for_specific_area">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="looking_for_left para_default">
               <h3><?php echo esc_html($title_sec_1);?></h3>
               <p style="color:<?php echo esc_html($title_sec_desc_1_color);?>"><?php echo esc_html($title_sec_desc_1);?> </p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
               <?php
                  $sce1_image =wp_get_attachment_image_src($title_sec_1_image,'full');
                  
                  if($sce1_image){?>
               <img src="<?php echo esc_url($sce1_image[0]);?>">
               <?php }
                  ?>
            </div>
         </div>
      </div>
      <!--row -->
   </div>
   <!--container -->
</div>
<!--looking_for_specific_area -->
<?php
   return ob_get_clean();
   
   }
   add_shortcode('section_1_base','consult_section_1');
   
   
   
   //section 3
   
   
   
   function consult_section_3($attr){
   
   
   
   
   extract(
   shortcode_atts(array(
   
   'sec_3_grp'=>'',
   'sec_3_icon'=>'',
   'sec_3_title'=>'',
   'sec_3_desc'=>'',
   'sec_3_image'=>'',
   
   ),$attr)
   );
   
   
   ob_start();
   
   ?>
<div class="about_section_area">
   <div class="container-fluid">
      <div class="row">
         <?php 
            $sec_3_key =vc_param_group_parse_atts($sec_3_grp);
            
            foreach($sec_3_key as $sec_3_value){?>
         <div class="col-md-4 col-sm-6">
            <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
               <?php
                  $sce3_image =wp_get_attachment_image_src($sec_3_value['sec_3_image'],'full');
                  
                  if($sce3_image){?>
               <img src="<?php echo esc_url($sce3_image[0]);?>">
               <?php }
                  ?>
               <i class="<?php echo esc_attr($sec_3_value['sec_3_icon']);?>"></i>
               <h3><?php echo esc_html($sec_3_value['sec_3_title']);?></h3>
               <p><?php echo esc_html($sec_3_value['sec_3_desc']);?></p>
            </div>
         </div>
         <!--col-md-4 -->
         <?php  }
            ?>
      </div>
      <!--row -->
   </div>
   <!--container-fluid -->
</div>
<!--about_section_area -->
<?php
   return ob_get_clean();
   
   }
   add_shortcode('section_3_base','consult_section_3');
   
   
   
   
   //
   
   
   
   function consult_section_cf($attr,$content=null){
   
   
   
   
   extract(
   shortcode_atts(array(
   
   ),$attr)
   );
   
   
   ob_start();
   
   ?>
<div class="contact_page_get_start_area">
   <div class="container">
      <div class="row">
         <div class="make_an_appoinment_area get_start_areA">
            <div class="col-md-12">
               <h3 class="title_get_start text-center">Ready to Get Started?</h3>
            </div>
            <?php 
               include_once( ABSPATH .'wp-admin/includes/plugin.php');
               
               if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
               	
               	echo do_shortcode($content);
               }
               
               ?>
         </div>
      </div>
      <!--row-->
   </div>
   <!--container-->
</div>
<!--contact_page_get_start_area-->
<?php
   return ob_get_clean();
   
   }
   add_shortcode('section_cf','consult_section_cf');
   
   
   
   
   
   
   //Blog
   
   
   
   function consult_section_blog($atts,$content=null){
   
   
   
   
   $args = array(
              "number_of_posts"=> "",
   		"sec_blog_title"  => "",
   		
          );
   
          $params	= shortcode_atts($args, $atts);
   ob_start();
   
   ?>
<div class="latest_blog_section_area removeBg_latest_blog">
   <div class="container">
      <div class="row">
         <div class="item single_blog_item_div para_default text-center">
            <?php if (isset($sec_blog_title) && $sec_blog_title): ?>
            <h2><a><?php echo esc_html($sec_blog_title);?></a></h2>
            <?php endif; ?>
         </div>
         <?php 
            $consult_blog_post  =new WP_Query(array(
            'post_type'=>'post',
            
            
            'posts_per_page' => $params['number_of_posts']
            
            ));
            $query = new \WP_Query(
            array( 'posts_per_page' => $params['number_of_posts']) 
            );
            
            
            if($consult_blog_post->have_posts()):while($consult_blog_post->have_posts()):$consult_blog_post->the_post();	
            
            
            
            
            ?>
         <div class="col-md-4">
            <div class="single_blog_h_active">
               <div class="single_blog_item_area para_default image_fulwidth text-center">
                  <a href="#"><?php the_post_thumbnail();?></a>
                  <h4><?php echo get_the_date('F j Y');?></h4>
                  <h3><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
                  <p><?php echo wp_trim_words(get_the_content(),15); ?></p>
               </div>
            </div>
         </div>
         <?php endwhile; endif; ?>
      </div>
   </div>
   <!-- container-->
</div>
<!-- latest_blog_section_area-->
<?php
   return ob_get_clean();
   
   }
   add_shortcode('section_3_blog','consult_section_blog');
   
   
   function consult_section_portfolio($attr,$content=null){
   
   
   
   
   extract(
   shortcode_atts(array(
        'sec_portfolio_post_per_page'=>'',
   
   ),$attr)
   );
   
   
   ob_start();
   
   ?>
<div id="consultancy_masonery" class="portfolio_section_area">
   <div class="container">
      <div class="consultancy_masonery_menu">
         <a class="active" data-filter="*"><span class="text">All</span></a>
         <?php
            $terms = get_terms('Portfolio');
            
            foreach($terms as $term ){ ?>
         <a data-filter=".<?php echo $term->slug;?>"><span class="text"><?php echo $term->name;?></span></a>
         <?php }
            ?>
      </div>
      <div class="consultancy_masonery text-center">
         <div class="consultancy_masonery_container text-center">
            <div class="consultancy_masonery_sizer"></div>
            <?php 
               $consult_portfolio_post =new WP_Query(
                array(
                'post_type'=>'portfolio',
                'taxonomy'=>'Portfolio',
                'post_per_page'=>$sec_portfolio_post_per_page,
                ));
                
                if($consult_portfolio_post->have_posts()):while($consult_portfolio_post->have_posts()):$consult_portfolio_post->the_post();
                ?>
            <?php
               $portfolio_var = get_post_meta(get_the_ID(), '_portfolio_setting', true );
                                                   
                               $att_ID=get_post_thumbnail_id(get_the_ID());
               
               
               $terms = get_the_terms( get_the_ID(), 'Portfolio' );
                            
               if ( $terms && ! is_wp_error( $terms ) ) : 
               
               $draught_links = array();
               
               foreach ( $terms as $term ) {
               $draught_links[] = $term->slug;
               }
                
               $on_draught = join( " ", $draught_links );
                
               
               ?>
            <div class="consultancy_masonery_item consultancy_masonery_item--<?php echo $portfolio_var['port_image_size'];?> <?php echo $on_draught; ?>">
               <a href="<?php echo esc_url(wp_get_attachment_url($att_ID)); ?>">
               <?php the_post_thumbnail();?>
               </a>
            </div>
            <!-- consultancy_masonery_item -->
            <?php endif; ?>
            <?php endwhile; endif; ?>
         </div>
         <!--.consultancy_masonery_container-->
      </div>
      <!--.portfolio2-->
   </div>
   <!--#portfolio2-->
</div>
<!--#portfolio2-->
<?php
   return ob_get_clean();
   
   }
   add_shortcode('section_3_portfolio','consult_section_portfolio');
   
   
   ?>
<?php get_header();?>
<div class="blog_page_area">
   <div class="container">
      <div class="row">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="col-md-8">
            <div class="blog_left_side_area">
               <div class="blog_pic image_fulwidth">
                  <?php the_post_thumbnail();?>
                  <h4 class="date_position"><a href="<?php the_permalink();?>"><?php the_date();?></a></h4>
               </div>
               <div class="blog_left_single_content blog_single_content para_default">
                  <h3>
                     <a href="<?php the_permalink();?>">
                        <?php the_title();?>
                  </h3>
                  <p><?php the_content();?>.</p>
                  <blockquote class="blockquote">
                  <p><?php the_excerpt();?></p>
                  <footer class="blockquote-footer"><?php the_author();?></footer>
                  </blockquote>
               </div>
               <?php include_once('tags.php');?>
               <div class="share_blog_single_in_social">
               <h4>
               <span>Share</span> 
               <a href="<?php the_author_meta('facebook');?>"><i class="fa fa-facebook"></i></a>
               <a href="<?php the_author_meta('twitter');?>"><i class="fa fa-twitter"></i></a>
               <a href="<?php the_author_meta('googlePlus');?>"><i class="fa fa-google-plus"></i></a>
               <a href="<?php the_author_meta('linkedin');?>"><i class="fa fa-linkedin"></i></a>
               </h4>
               </div>
               <div class="consultency_comments_form">
                  <h2 class="comments_title">Leave a Reply</h2>
                  <div class="row">
                     <form action="#" method="post">
                        <div class="col-md-6 col-sm-6">
                           <div class="form-group">
                              <input type="email" class="form-control" placeholder="E-mail*">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="form-group">
                              <input type="url" class="form-control" placeholder="Website">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea name="message" class="form-control" rows="4" placeholder="Your Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <div class="send_me_ph">
                                 <a class="submit_btn_quick_contact" href="#">Submit Now</a>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- blog_left_side_area -->
         </div>
         <!-- col-md-8 -->
         <?php include_once('searchform.php');?>
         <div class="blog_right_widget">
            <div class="blog_widget">
               <h3 class="blog_widget_title"><?php //widget_title();?></h3>
               <ul>
                  <li><a href="<?php the_permalink();?>"><?php the_category();?></a></li>
                  <!--
                     <li><a href="service-details-page-02.html">Development</a></li>
                     <li><a href="service-details-page-03.html">Consultancy Service</a></li>
                     <li><a href="service-details-page-04.html">Marketing Strategy</a></li>
                     <li><a href="service-details-page-05.html">Finance Management</a></li>
                     <li><a href="service-details-page-06.html">Audit & Assurance</a></li>
                     <li><a href="service-details-page-07.html">Taxation</a></li>
                     <!-->
               </ul>
            </div>
         </div>
         <!-- blog_right_widget  -->
         <li><a href="<?php the_permalink();?>"><?php the_date();?></a></li>
         <div class="blog_right_widget">
            <div class="blog_widget">
               <h3 class="blog_widget_title">Project</h3>
               <div class="project_div clearfix">
                  <figure class="image">
                     <a href="images/blog_project_item_01.jpg" data-fancybox="gallery">
                     <img src="images/blog_project_item_01.jpg" alt="images">
                     </a>
                  </figure>
                  <figure class="image">
                     <a href="images/blog_project_item_02.jpg" data-fancybox="gallery">
                     <img src="images/blog_project_item_02.jpg" alt="images">
                     </a>
                  </figure>
                  <figure class="image">
                     <a href="images/blog_project_item_03.jpg" data-fancybox="gallery">
                     <img src="images/blog_project_item_03.jpg" alt="images">
                     </a>
                  </figure>
                  <figure class="image">
                     <a href="images/blog_project_item_04.jpg" data-fancybox="gallery">
                     <img src="images/blog_project_item_04.jpg" alt="images">
                     </a>
                  </figure>
                  <figure class="image">
                     <a href="images/blog_project_item_05.jpg" data-fancybox="gallery">
                     <img src="images/blog_project_item_05.jpg" alt="images">
                     </a>
                  </figure>
                  <figure class="image">
                     <a href="images/blog_project_item_06.jpg" data-fancybox="gallery">
                     <img src="images/blog_project_item_06.jpg" alt="images">
                     </a>
                  </figure>
               </div>
            </div>
         </div>
         <!-- blog_right_widget  -->
         <div class="blog_right_widget">
            <div class="blog_widget">
               <h3 class="blog_widget_title">Archive</h3>
               <form action="#" method="post">
                  <div class="form-group">
                     <select>
                        <option value="Select Month">
                           Select Month
                        </option>
                        <option value="saab">
                           January 2017
                        </option>
                        <option value="mercedes">
                           february 2017
                        </option>
                        <option value="audi">
                           March 2017
                        </option>
                        <option value="audi">
                           April 2017
                        </option>
                        <option value="audi">
                           August 2017
                        </option>
                        <option value="audi">
                           Dcember 2017
                        </option>
                     </select>
                  </div>
               </form>
            </div>
         </div>
         <!-- blog_right_widget  -->
      </div>
   </div>
   <!-- col-md-4 -->
   <?php wp_reset_postdata();?>
   <?php endwhile;?>
   <?php endif ;?>
</div>
<!-- row -->
</div><!-- container -->
</div><!-- blog_page_area -->
<?php get_footer();?>