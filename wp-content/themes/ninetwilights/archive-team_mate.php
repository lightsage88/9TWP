<?php get_header(); ?>

<main role="main">
  <div class='scrollBackground'>
    <section>
      <?php pageBanner(array(
        "title" => "Team",
        "subtitle" => "Nine Twilights is brought to you by a spectacular creative collaborative team. Here's a little bit about them: "
      )); 
      ?>
      <ul style="list-style:none;">
        <?php
          while(have_posts()){
            the_post();
            get_template_part('template-parts/content', 'team_mate');
          if(more_posts()){
        ?>
          <div class='norseDivider'></div>
        <?php
          }
        }
        ?>
      </ul>
    </section>
  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
