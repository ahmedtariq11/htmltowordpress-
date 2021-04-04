 <?php  if(cs_get_option('growup')!= ''):?>
    <div class="grow_up_Section_Area" style="background-color: <?php echo cs_get_option('grow_color_bg'); ?>">
        <div class="container">
            <div class="row">
    <?php  $posts = new WP_Query( array( 'post_type' => 'grow_up' , 'order' => 'ASC','post_per_page' =>'-1') );
while($posts->have_posts()) : $posts->the_post();?>
                <div class="col-md-6">
                    <div class="content_grow_up para_default">
                        <h3 style="color: <?php echo cs_get_option('grow_color_text'); ?>"><?php the_title();?></h3>
                        <p style="color: <?php echo cs_get_option('grow_color_desc'); ?>"><?php the_content();?>.</p>
                        <p  style="color: <?php echo cs_get_option('grow_color_small'); ?>"><?php the_excerpt();?></p>
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <div class="text-center">
                      <?php the_post_thumbnail('grow_up');?>
                    </div>
                    </div>

<?php endwhile;?>
                

            </div><!-- row  -->
        </div><!-- container End -->
    </div><!-- grow_up_Section_Area End -->
<?php endif;?>