<?php $mapLocation = get_field('map_location'); ?>
<div class='post-item'>
  
    <a class='event__anchor' href="<?php the_permalink(); ?>">
      <span class='event__name'><?php the_title(); ?></span>
    </a>
    <div class='event__template__content__container'>
      <?php the_content(); 
      print_r($mapLocation);
      ?>
      <div class='acf-map'>
        <div class='marker' data-lat="<?php echo $mapLocation['lat']; ?>"
        data-lng="<?php echo $mapLocation['lng']; ?>">
      </div>

    </div>
          <?php echo $mapLocation['address']; ?>

</div> 