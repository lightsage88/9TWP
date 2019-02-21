<?php get_header(); ?>

	<main role="main">
    <div class='scrollBackground'>
		<section>
      <?php pageBanner(array(
          "title" => "Events",
          "subtitle" => "Here's where to see us next!"
      )); 
      
      while(have_posts()){
        the_post();
        get_template_part('template-parts/content', 'event'); 

      }
    ?>

		</section>
    </div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
