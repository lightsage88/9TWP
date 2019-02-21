<?php
/**
 * @package kerli-lite
 * @since kerli-lite 1.0
 */
add_action ('wp_head', 'kerli_lite_customizer_css');
function kerli_lite_customizer_css() {
	
	/**********************
	text colors
	**********************/

	// Body Font color
	$body_font_color = esc_html(get_theme_mod('kerli_lite_body_color'));

	// Heading color
	$heading_color = esc_html(get_theme_mod('kerli_lite_heading_color'));

	// Site Title color
	$site_title_color = esc_html(get_theme_mod('kerli_lite_site_title_color'));

	// link color
	$link_color = esc_html(get_theme_mod('kerli_lite_link_color'));

	// hover or active link color
	$hover_link_color = esc_html(get_theme_mod('kerli_lite_hover_color'));

	/****************************************
	styling
	****************************************/
?>

<style id="kerli-style-settings">

	<?php if ( get_theme_mod('kerli_lite_body_color') ) : ?>
		body, button, input, select, textarea {color: <?php echo $body_font_color; ?>;}
	<?php endif; ?>
	
	<?php if ( get_theme_mod('kerli_lite_site_title_color') ) : ?>
		.site-title a {color: <?php echo $site_title_color; ?> !important;}
		.site-description {color: <?php echo $site_title_color; ?>;}
	<?php endif; ?>

	<?php if ( get_theme_mod('kerli_lite_heading_color') ) : ?>
		h1, h2, h3, h4, h5, h6 {color: <?php echo $heading_color; ?>; }
	<?php endif; ?>

	<?php if ( get_theme_mod('kerli_lite_link_color') ) : ?>
		a,a:visited {color: <?php echo $link_color; ?>;}
	<?php endif; ?>
			
	<?php if ( get_theme_mod('kerli_lite_hover_color') ) : ?>
		a:hover,a:focus,a:active {color: <?php echo $hover_link_color; ?>;  !important;}
	<?php endif; ?>

</style>
	
<?php
}