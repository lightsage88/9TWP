<?php
/**
 * kerli-lite functions and definitions
 *
 * @package kerli-lite
 * @since kerli-lite 1.0
 */

$theme = wp_get_theme();
define ('KERLI_LITE_VERSION', $theme -> get('Version'));
define ('KERLI_LITE_AUTHOR_URI', $theme -> get('AuthorURI'));

// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 780; /* pixels */
}

/**
 * Kerli lite setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Kerli lite supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Kerli lite 1.0
 */
 
if ( ! function_exists( 'kerli_lite_setup' ) ) :
	
	function kerli_lite_setup() {
		
	// Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'kerli-lite', get_template_directory() . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );
	
	// load theme options page
	require_once( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );
	
	/* Enable support for Post Thumbnails on posts and pages */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'kerli_lite_cp_small', 70, 53, true); 

	/* Add callback for custom TinyMCE editor stylesheets. (editor-style.css) */
     add_editor_style(get_template_directory_uri() . '/editor-style.css');
	 
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kerli-lite' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'quote', 'audio' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kerli_lite_custom_background_args', array(
		'default-color' => 'f1f1f1',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // kerli_lite_setup
add_action( 'after_setup_theme', 'kerli_lite_setup' );
	
/**
 * Enqueue scripts.
 */
function kerli_lite_scripts() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	
	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'kerli-lite-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20140711', true );
	
	wp_enqueue_script('kerli-lite-global', get_template_directory_uri() . '/js/global.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'kerli_lite_scripts' );

/**
 * Enqueue styles.
 */
function kerli_lite_css() {
	global $wp_styles;
	
	// Loads our main stylesheet.
	wp_enqueue_style( 'kerli-lite-style', get_stylesheet_uri(), '', KERLI_LITE_VERSION );

	wp_enqueue_style( 'kerli-lite-fonts', kerli_lite_fonts_url() );
}
add_action( 'wp_enqueue_scripts', 'kerli_lite_css' );

/**
 * Google fonts URL
 */
function kerli_lite_fonts_url() {

	$fonts_url = '';

	$locale = get_locale();
	$cyrillic_locales = array( 'ru_RU', 'mk_MK', 'ky_KY', 'bg_BG', 'sr_RS', 'uk', 'bel' );

	/* Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'kerli-lite' );

	/* Translators: If there are characters in your language that are not
	 * supported by Josefin Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$josefin_sans = _x( 'on', 'Josefin Sans font: on or off', 'kerli-lite' );

	/* Translators: If there are characters in your language that are not
	 * supported by Open Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'kerli-lite' );

	if ( 'off' == $lato && 'off' == $josefin_sans && 'off' == $open_sans ) {
		return $fonts_url;
	}

	$font_families = array();

	if ( 'off' !== $lato ) {
		$font_families[] = 'Lato';
	}

	if ( 'off' !== $josefin_sans ) {
		$font_families[] = 'Josefin Sans';
	}

	if ( 'off' !== $open_sans ) {
		$font_families[] = 'Open Sans:300,400,700,400italic,700italic';
	}

	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);

	if ( in_array($locale, $cyrillic_locales) ) {
		$query_args['subset'] = urlencode( 'latin,latin-ext,cyrillic' );
	}

	$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

	return $fonts_url;
}
	   
/* Add Admin stylesheet to the admin page */
function kerli_lite_selectively_enqueue_admin_script( $hook ) {
	if ( 'widgets.php' != $hook ) {
        return;
    }
    wp_enqueue_style( 'kerli-lite-adminstyle', get_template_directory_uri() . '/css/style-admin.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'kerli_lite_selectively_enqueue_admin_script' );

/**
 * Excerpt
 */
add_filter( 'excerpt_length', 'kerli_lite_excerpt_length', 999 );

function kerli_lite_excerpt_length($length) {
	return 60;
}

// Excerpt Text [...]
add_filter('excerpt_more', 'kerli_lite_excerpt_more');

function kerli_lite_excerpt_more($more) {
   global $post;
   return '... <a href="'. get_permalink($post->ID) . '">' . __( 'Read more', 'kerli-lite' ) . ' &raquo;</a>';
}

/** Load functions */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';

/** Theme customizer */
require_once( get_template_directory() . '/inc/kerli-customizer.php' );
require_once( get_template_directory() . '/inc/kerli-customization.php' );
require_once( get_template_directory() . '/inc/theme-options.php' );

/** Load Widgets and Widgetized Area */
require get_template_directory() . '/inc/kerli-widgets.php';

/* Load Jetpack compatibility file */
require get_template_directory() . '/inc/jetpack.php';

/* Print the attached image */
include (get_template_directory() . '/inc/image.php');
