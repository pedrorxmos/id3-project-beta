<?php get_header(); ?>
  <main>
    <a href="#banner" class="herobanner">
      <div class="herobanner__img" style="background-image: url(<?php echo get_the_post_thumbnail_url(104) ?>);"></div>

      <div class="herobanner__info">
        <h2><?php echo get_the_title(104); ?></h2>
        <p><?php echo get_post_field('post_content', 104) ?></p>

        <button class="btn btn-main">Shop Now</button>
      </div>
    </a>

    <a href="#banner" class="herobanner">
      <div class="herobanner__img" style="background-image: url(<?php echo get_the_post_thumbnail_url(108) ?>);"></div>

      <div class="herobanner__info">
        <h2><?php echo get_the_title(108); ?></h2>
        <p><?php echo get_post_field('post_content', 108) ?></p>

        <button class="btn btn-main">Shop Now</button>
      </div>
    </a>
  </main>
<?php get_footer(); ?>