

<a href="#banner" class="herobanner">
  <div class="herobanner__img" style="background-image: url(<?php echo get_the_post_thumbnail_url($args['id']) ?>);"></div>

  <div class="herobanner__info">
    <h2><?php echo get_the_title($args['id']); ?></h2>
    <p><?php echo get_post_field('post_content', $args['id']) ?></p>

    <button class="btn btn-main">Shop Now</button>
  </div>
</a>