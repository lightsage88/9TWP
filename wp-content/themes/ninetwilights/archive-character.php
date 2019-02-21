
<?php get_header(); ?>

<main role="main">
  <div class='scrollBackground'>
    <section>
      <?php castPageBanner(array(
        "title" => "Cast"
      )); 
      ?>
      <div class='archive__character__norse__divider'></div>
        <?php
          while(have_posts()){
            the_post();
            get_template_part('template-parts/content', 'character');
          if(more_posts()){
        ?>
        <div class='norseDivider'></div>
        <br>
        <br>
        <?php
          }
        }
        ?>
    </section>
  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?> -->
