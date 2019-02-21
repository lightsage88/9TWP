<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ving
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 col-md-12'); ?>>
		<div class="featured-home col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>"><?php 
				echo the_post_thumbnail('ving-home-thumb'); ?></a>
			<?php else: ?>	
		<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri()."/images/dthumb.jpg" ); ?>"></a>
	<?php endif; ?>	
		</div>
			<?php the_title( sprintf( '<h2 class="entry-title col-lg-6 col-md-6 col-sm-12 col-xs-12"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</article>