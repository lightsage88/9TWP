<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package ving
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses ving_header_style()
 * @uses ving_admin_header_style()
 * @uses ving_admin_header_image()
 */
function ving_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'ving_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/header.jpg',
		'default-text-color'     => 'a00322',
		'width'                  => 1440,
		'height'                 => 600,
		'flex-height'            => true,
		'wp-head-callback'       => 'ving_header_style',
		'admin-head-callback'    => 'ving_admin_header_style',
		'admin-preview-callback' => 'ving_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'ving_custom_header_setup' );

if ( ! function_exists( 'ving_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see ving_custom_header_setup().
 */
function ving_header_style() {
	$header_image = get_header_image();

	// If no custom options for text are set, let's bail
	if ( empty( $header_image ) && display_header_text() ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
	
		// Has a Custom Header been added?
		if ( ! empty( $header_image ) ) :
	?>
		#header-image {
			background: url(<?php esc_url( header_image() ); ?>) no-repeat;
			background-position: 50% 0%;
			-webkit-background-size: cover;
			-moz-background-size:    cover;
			-o-background-size:      cover;
			background-size:         cover;
			background-attachment: 	 fixed;
		}

		@media screen and (min-width: 59.6875em) {
			body:before {
				background: url(<?php esc_url( header_image() ); ?>) no-repeat 100% 50%;
				-webkit-background-size: cover;
				-moz-background-size:    cover;
				-o-background-size:      cover;
				background-size:         cover;
				border-right: 0;
			}

			.site-header {
				background: transparent;
			}
		}
	<?php
		endif;
		
		$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
	if ( 'blank' === $header_text_color ) {
	return;
	}

		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	<?php endif; ?>
	</style>
	<?php
		

}
endif; // trance_header_style

if ( ! function_exists( 'ving_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see ving_custom_header_setup().
 */
function ving_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
endif; // ving_admin_header_style

if ( ! function_exists( 'ving_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see ving_custom_header_setup().
 */
function ving_admin_header_image() {
?>
	<div id="headimg">
		<h1 class="displaying-header-text">
			<a id="name" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>" onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<div class="displaying-header-text" id="desc" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>"><?php bloginfo( 'description' ); ?></div>
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // ving_admin_header_image
