<?php get_header();?>
<div class="container">
   <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
         <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
         <?php the_excerpt();?>
         <?php the_date();?>
         <?php the_author();?>
         <?php endwhile;?>
         <?php endif;?>
      </div>
   </div>
</div>
<div class="blog_pagination">
   <?php post_pagination(); ?>
</div>
<!-- /news table  --