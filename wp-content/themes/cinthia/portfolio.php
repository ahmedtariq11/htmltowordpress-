<?php /* Template Name:Portfolio us */?>
<?php get_header();?>
<div class="portfolio_section_area">
   <div class="container">
      <div class="row">
         <ul class="portfolio_menu">
            <?php $loop = new WP_Query( array( 'post_type' => 'portfolio_tab','posts_per_page' => -1 ) ); ?>
            <?php 
               $counter = 0;
               while ( $loop->have_posts() ) : $loop->the_post(); 
                   $counter++;
               ?>
            <li class="filter-<?php the_ID(); ?> <?php if($counter==1) { echo 'active'; }?>" data-filter="<?php the_title();?>">
               <?php the_title();?>  
            </li>
            <?php endwhile;  wp_reset_query(); ?>
         </ul>
         <?php
            $counter = 0;
            $loop = new WP_Query( array( 'post_type' => 'portfolio_tab', 'posts_per_page' => -1 ) );
            while ( $loop->have_posts() ) : $loop->the_post(); 
                $counter++;
            ?>
         <div    class="mix-<?php the_ID(); ?> <?php if($counter==1) {echo 'active';}?> portfolio_column_div "  id="<?php echo $i; ?>">
         </div>
         <div class="col-md-6 col-sm-6 mix BRANDING">
            <div class="portfolio_column image_fulwidth">
               <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" data-fancybox="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>">
               <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="">
               </a>
            </div>
         </div>
         <!-- col-md-6 -->
         <?php endwhile; ?>
      </div>
   </div>
</div>

<?php get_footer();?>