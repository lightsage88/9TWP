<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ving
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<div class="ving-time">
				<div class="date">
					<?php the_time('j'); ?>
				</div>
				<div class="month">
					<?php the_time('M'); ?>
				</div>
			</div>
		</div><!-- .entry-meta -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php 
		if ( has_post_thumbnail() && get_theme_mod('ving_featured_thumb', 'true') ) { // check if the post has a Post Thumbnail assigned to it.
	?>
	<div class="featured-thumb">
		<?php 
			the_post_thumbnail();
		?>
	</div>
	<?php
		}
	?>
	<div class="ving-author">
		<a href="<?php esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php esc_html( the_author() ); ?></a>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ving' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ving_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

