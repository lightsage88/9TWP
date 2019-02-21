<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ving
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ving' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div id="header-image">
			<?php	
				if ( get_theme_mod( 'social' ) == true ) {
					get_template_part('social');
				}
			?>
			<div id="search-head">
			<div id="search-icon">
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-search fa-stack-1x fa-inverse"></i>
				</span>
			</div>
			<div id="searchform">
				<form method="get" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>/">
							<div><input type="text" size="18" value="" name="s" id="s" />
							<button type="submit" class="search-submit"><?php _e('Search', 'ving'); ?></button>
							</div>
					</form>
				</div>
			</div>
		</div>
		<div class="site-branding">
			<?php if ( function_exists('the_custom_logo') && has_custom_logo() ) : ?>
		<div id = "logo">
			<?php the_custom_logo(); ?>
		</div>
		<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ving' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	<div id="content" class="site-content container">
		
	<?php if ( is_front_page() && get_theme_mod( 'ving-fp-enable' ) ) :
		get_template_part('post','featured');
	endif; ?>
