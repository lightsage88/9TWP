<?php $image = get_field('character_image');
 ?>
  <div class='character__grid'>
      <img class='character__image' src='<?php echo $image['url']; ?>'>
      <div class='character__content__box'>
        <span class='character__name'><?php the_title(); ?></span>
        <?php the_content(); ?>
      </div>
  </div>
  <!--we want the img to have a width of 55% -->

