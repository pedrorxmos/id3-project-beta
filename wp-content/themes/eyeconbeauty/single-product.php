<?php get_header(); the_post();?>
  <main>
    single-product.php
    <h1 class="hide"><?php the_title(); ?></h1>
    <div class="container gap-2rem">
      <h2><?php the_title(); ?></h2>
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>
      heyy
    </div>
  </main>
<?php get_footer(); ?>