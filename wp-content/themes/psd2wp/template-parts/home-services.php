<div class="services-head">
				<h1>Google LLC</h1>
				<p>Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware</p>

			
			</div><!----SERVICE HEAD SECTION--->
	


<?php
				$args=array(
					'post_type'=>'services',
					'status'=>'published',
					'posts_per_page'=>4


				);
$the_query = new WP_Query( $args );
 
while ( $the_query->have_posts()) :
			$the_query->the_post(); 
				?>
	<div class="service-col pull-left col-lg-3 col-md-3   col-sm-6 col-xs-12">
		<div class="service-circle">
			<div class="service-icon">
				<?php  the_post_thumbnail(); ?>
			</div>	<!---  services-icon--->	
<h3><?php the_title()  ?></h3>
<p><?php the_excerpt()  ?></p>
<a href="<?php the_permalink();?>"class="service-read-more">ReadMore<i class="fa fa-angle-double"></i></a>
</div><!---  services-circle--->

	</div><!---  services-col--->
  <?php 
wp_reset_postdata();?>
<?php endwhile;
?>

		
		