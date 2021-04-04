
 <?php if (cs_get_option('ourteam') != ''): ?>
    <div class="team_page_section_area"  style="background-color: <?php echo cs_get_option('team_color_bg'); ?>">
        <div class="container">
            <div class="section_title text-center">
                <h2>Our Consultants</h2>
            </div>
            <div class="team_page_section_list">
                <div class="row">
                    <?php
                    global $post;
                    $i = 0;

                    $posts = new WP_Query(['post_type' => 'ourconsultant', 'order' => 'ASC', 'post_per_page' => '-1']);
                    while ($posts->have_posts()):
                        $posts->the_post(); ?>
                    <div class="col-md-4 col-sm-6">
                        
                        <div class="single_team_Consultants text-center">
                              
                           <?php
                           the_post_thumbnail('ourconsultant');
                           $i++;
                           ?>

       
                            <div   class="team_consult_overlay"  style="color: <?php echo esc_attr(cs_get_option('team_color_overlay_bg')); ?>">

                                <div class="top_consult_content">

                                    <h4  style="color: <?php echo cs_get_option('team_color_text'); ?>"><a href="team-details.html"><?php the_title(); ?></a></h4>
                                       <h4  style="color: <?php echo cs_get_option('team_color_desc'); ?>"><a href="team-details.html"><?php echo $m_name_subtitle; ?></a></h4>
                                    <p><?php the_excerpt(); ?></p>


                                </div>
                                <ul class="bottom_consult_content">

<li>
                                  

                                      <a class="fa fa-facebook" href="<?php echo esc_attr(get_post_meta(get_the_ID(), 'facebook', true)); ?>"></a>
                                        <a class="fa fa-fa fa-instagram" href="<?php echo esc_attr(get_post_meta(get_the_ID(), 'instagram', true)); ?>"></a>

                                          <a class="fa fa-fa fa-twitter" href="<?php echo esc_attr(get_post_meta(get_the_ID(), 'twitter', true)); ?>"></a>
                                 </li>
                                   
                                    
                                </ul>
                            </div>
                       
                        </div>
                    </div><!-- col-md-4 -->







                     <?php
                    endwhile;
                    ?>
                    



                    
                </div><!-- row -->
            </div><!-- team_page_section_list -->
        </div><!-- container -->
    </div><!-- team_page_section_area -->
    <?php endif; ?>
