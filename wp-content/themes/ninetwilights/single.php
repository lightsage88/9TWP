<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<!-- /post details -->

			<div id="pagination-single">
				<div id="previous"><?php previous_post_link('%link', 'Previous', TRUE); ?></div>
				<div id="next"><?php next_post_link('%link', 'Next', TRUE); ?></div>
			</div>

			<?php the_content(); // Dynamic Content ?>

			<div id="pagination-single">
				<div id="previous"><?php previous_post_link('%link', 'Previous', TRUE); ?></div>
				<div id="next"><?php next_post_link('%link', 'Next', TRUE); ?></div>
			</div>

			<!-- <?php comments_template(); ?> -->
			
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
