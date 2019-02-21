<?php
/**
 * Register Widget Areas / Sidebars
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function kerli_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'kerli-lite' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	/***** Register Widgets *****/
	register_widget('kerli_lite_about_widget');
	register_widget('kerli_lite_custom_posts_widget');
	
}
add_action( 'widgets_init', 'kerli_lite_widgets_init' );

/***** Include Widgets *****/
get_template_part('inc/widgets/kerli-about-widget');
get_template_part('inc/widgets/kerli-custom-posts');

?>