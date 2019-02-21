<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package kerli-lite
 * @since kerli-lite 1.0
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function kerli_lite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'kerli_lite_jetpack_setup' );
