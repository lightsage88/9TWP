<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ving
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-4 col-sm-6 col-xs-12'); ?>>
		<div class="featured-home">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<div class="featured-thumb">
			<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>"><?php 
				echo the_post_thumbnail('ving-home-thumb'); ?></a>
			<?php else: ?>	
		<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri()."/images/dthumb.jpg" ); ?>"></a>
	<?php endif; ?>
			</div>	
		</div>
</article>