<?php get_header(); the_post();?>
  <main>
    <div class="container gap-2rem">
      <h1><?php the_title() ?></h1>
      <?php the_content() ?>
    </div>
  </main>
<?php get_footer(); ?>