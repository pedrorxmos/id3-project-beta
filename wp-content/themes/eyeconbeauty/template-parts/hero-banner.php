<?php 
  // $id = get_post_id_by_slug($args['slug']);
  // echo $id;
  // echo $args['slug'];

  $page = get_posts(array(
    'name' => $args['slug'],
  ));
  echo $page->post_content;
?>

<a href="#banner" class="herobanner">
  <div class="herobanner__img" style="background-image: url(<?php echo get_the_post_thumbnail_url($id) ?>);"></div>

  <div class="herobanner__info">
    <?php echo get_post_field('post_content', $id); ?>

    <button class="btn btn-main">Shop Now</button>
  </div>
</a>