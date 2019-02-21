<?php
/**
 * The Sidebar containing the Sidebar
 *
 * @package kerli-lite
 * @since kerli-lite 1.0
 */
?>

	<?php
		if (   ! is_active_sidebar( 'sidebar-1' ) )
			return;
	?>

	<div id="secondary" class="column third">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="sidebar-1" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>
	</div><!-- #contact-sidebar -->