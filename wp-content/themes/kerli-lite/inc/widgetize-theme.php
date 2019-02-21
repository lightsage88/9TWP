<?php
/**
 * Registers the main widgetized sidebar area.
 *
 * @since Kerli 1.0
 */
function kerli_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'kerli-lite' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_widget( 'kerli_about_widget' );
	register_widget( 'kerli_custom_posts_widget' );
	register_widget( 'kerli_social_widget' );
	register_widget( 'kerli_instagram' );
}
add_action( 'widgets_init', 'kerli_widgets_init' );
?>