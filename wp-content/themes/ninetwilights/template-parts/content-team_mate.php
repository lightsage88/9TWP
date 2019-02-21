<?php $image = get_field('teammate_picture'); ?>
<div class='post-item'>
  <li class='professor-card__list-item'>
    <a class='teammate__anchor' href="<?php the_permalink(); ?>">
      <img class='teammate__image' src='<?php echo $image['url']; ?>'>
      <span class='teammate__name'><?php the_title(); ?></span>
      <span class='teammate__role'><?php echo get_field('teammate_role'); ?></span>
    </a>
    <div class='teammate__content__container'>
      <?php the_content(); ?>
    </div>
  </li>
</div> 