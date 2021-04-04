<?php /* Template Name:blog */?>
<?php get_header();?>
<?php 
   $blog=get_field('blog');
   
   
   ?>
<div class="page_title_banner blog_grid_title_bg" style="background-image: url('<?php echo $blog['blogimages']['url']?>')">
   <div class="page_title_banner_overlay"></div>
   <div class="container">
      <div class="page_title_banner_text text-center">
         <h2>Blog Grid</h2>
         <ul class="breadcrumb">
            <li><a href="<?php esc_url('/');?>"><?php echo $blog['blogtitle']?></a></li>
            <li><a href="#"><?php echo $blog['blogpage']?></a></li>
            <li class="active"><?php the_title();?></li>
         </ul>
      </div>
   </div>
   <!--container-->
</div>
<!-- page_title_banner -->
<div class="blog_page_area blog_page_area_respon">
<div class="container">
   <div class="row">
      <?php 
         $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                      $posts = query_posts( array( 'post_type' => 'post' , 'paged' => $paged,
                                         'order' => 'ASC','posts_per_page' => 6) );
         while(have_posts()) : the_post();?>
      <div class="col-md-4 col-sm-6">
         <div class="single_blog_item_area blog_grid_item para_default image_fulwidth text-center">
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
            <h4><?php the_title();?></h4>
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <p><?php the_excerpt();?></p>
         </div>
      </div>
      <!-- col-md-4-->
      <?php endwhile;?>
      <div class="blog_pagination">
         <?php post_pagination(); ?>
      </div>
   </div>
   <!-- container -->
</div>
<!-- blog_page_area -->
<?php get_footer();?>