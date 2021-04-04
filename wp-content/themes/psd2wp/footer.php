<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSD_to__WP
 */

?>
<footer class="site-footer">
    <div class="row ml-0 mr-0 footer-widgets">
        <div class="widget-col col-lg-3 col-md-3 col-sm-3col-xs-12">
            <?php dynamic_sidebar('footer-1') ?>
        </div>
        <div class="widget-col col-lg-3 col-md-3 col-sm-3col-xs-12">
            <?php dynamic_sidebar('footer-2') ?>
        </div>
        <div class="widget-col col-lg-3 col-md-3 col-sm-3col-xs-12">
            <?php dynamic_sidebar('footer-3') ?>
        </div>

        <div class="widget-col col-lg-3 col-md-3 col-sm-3col-xs-12">
            <?php dynamic_sidebar('footer-4') ?>
        </div>
    </div>

   
                </div>
</footer>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'psd2wp' ) ); ?>">
				
				
				  <span> <?php echo get_theme_mod('Teaser-time', 'Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>') ?>
              
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'psd2wp' ), 'psd2wp', '<a href="https://underscores.me/">AHMED ALI</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){



		$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});
	
	</script>

</body>
</html>
