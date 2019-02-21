<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @package kerli-lite
 * @since kerli-lite 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<div class="container">

		<?php get_template_part('inc/topbar'); ?>		
			
		<header id="masthead" class="site-header">

			<?php if ( get_header_image() ) { 
					if (get_theme_mod('kerli_lite_logo_active') == 1) { 
						$div_image_header = '<div class="logo-header-wrapper">';
						if (get_theme_mod('kerli_lite_logo_center') == 1) $div_image_header = '<div class="logo-header-wrapper-center">';
					}else{
						$div_image_header = '<div class="image-header-wrapper">';
					} ?>
					
					<?php //echo $div_image_header; ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
					</div><!-- logo-header-wrapper -->
					
			<?php }else{ ?>
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			<?php } //if ( get_header_image() ) ?>

			<nav id="site-navigation" class="main-navigation">
				<div class="section-inner">
					<div class="nav-toggle">
						<div class="bars">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</div>
					</div> <!-- /nav-toggle -->
					
					<div class="clear"></div>
				</div><!-- /section-inner -->
				
				<ul class="mobile-menu">
				
				<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); 
					}
				?>
				
				</ul><!-- /mobile-menu -->
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kerli-lite' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			
		</header><!-- #masthead -->

		<div id="content" class="site-content">
