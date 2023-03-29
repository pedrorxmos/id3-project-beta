<?php 
  // $id = get_post_id_by_slug($args['slug']);
  // echo $id;
  // echo $args['slug'];

  $page = get_page_by_path( $args['slug'], OBJECT, 'hero-banner' );
  $id = $page->ID;
?>

<a href="<?php echo home_url( '/shop/' ); ?>" class="herobanner" alt="Shop">
  <div class="herobanner__img" style="background-image: url(<?php echo get_the_post_thumbnail_url($id) ?>);"></div>

  <div class="herobanner__info">
    <?php echo get_post_field('post_content', $id); ?>

    <button class="btn btn-main">Shop Now</button>
  </div>
</a>