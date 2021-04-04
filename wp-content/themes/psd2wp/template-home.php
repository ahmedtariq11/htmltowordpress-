<?php
/**
 * The template for displaying all pages
 *
 * Template Name:HomePage
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PSD_to__WP
 */

get_header();
?>

	<div id="primary" class="site-main">
		<div class="home-banner row ml-0 mr-0">
			<div class="container">
				<div class="banner-text">
				<h3>Google LLC</h3>
				<p>Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware</p>

			
			</div>  <!--- banner text--->

		</div> <!--- containe--->


	</div> <!--- home banner--->


	<div class="home-services row ml-0 mr-0">
		

	<?php get_template_part('template-parts/home','services');?>
	
		</div>
<!--- home-services row ml-0 mr-0--->

<div class="home-portfolio row ml-0 mr-0">

		<?php get_template_part('template-parts/home','portfolio');?>
	
		</div>  <!--- home-portfolio --->
			
		
</div> <!--- primary --->

<?php

get_footer();









		