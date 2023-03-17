<?php /* Template Name: Page */ ?>

<?php get_header(); the_post();?>
  <main>
    template-page.php
    <h1 class="hide"><?php the_title(); ?></h1>
    <div class="container gap-2rem">
      <h2><?php the_title(); ?></h2>
      <?php the_content() ?>
    </div>
  </main>
<?php get_footer(); ?>