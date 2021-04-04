<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSD_to__WP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'psd2wp' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="small-header row mr-0 ml-0">
			<div class="container">
				<div class="pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="small-header-info">
						<i class="fa fa-phone">+923465191093</i>
					</div><!--- small-header-info--->
					<div class="small-header-info">
							<i class="fa fa-whatsapp">+923465191093</i>
						</div>  <!--- small-header-info--->
						<div class="small-header-info">
								<i class="fa fa-email">ahmedtariqlife900@gmail.com</i>
							</div> <!--- small-header-info--->
					</div><!--- pull-left col-lg-6 col-md-6 col-xs-12 col-sm-12--->
				
			

				<div class="pull-right col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'small-menu',
					'menu_class'=>'small-menu',

					'container'        => false,

					

				)

			);
			?>
			
			</div><!---  pull-right col-lg-6 col-md-5 col-xs-12 col-sm-12--->
		</div><!---  container--->

	</div><!---  small-header row ml-0 mr-0--->
		<div class="site-branding row  ml-0 mr-0">
			<div class="container">
			<?php
			the_custom_logo();
			 ?>
			</div><!-- .container -->
		</div><!-- .site-branding -->
<div class="nav-row row ml-0 mr-0">
	<div class="container">
		<nav id="site-navigation" class="main-navigation">
				

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'psd2wp' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',

					'container'        => false,
				)

			);
			?>
		</nav><!-- #site-navigation -->
	</div><!-- #container -->
</div><!-- #nav-row row ml-0 mr-0 -->

	</header><!-- #masthead -->
