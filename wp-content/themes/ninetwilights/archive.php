<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<!-- <h1>Events</h1>
			<div>
				<p>Here's where to see us next!</p>
			</div> 
			We need to put a function here to output the above for each type.
			-->
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
