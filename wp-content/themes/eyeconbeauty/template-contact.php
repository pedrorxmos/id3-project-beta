<?php /* Template Name: Contact */ ?>

<?php get_header(); the_post();?>
  <main>
    <h1 class="hide"><?php the_title(); ?></h1>
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="contact-page">
      <?php the_content() ?>
    </div>
  </main>
<?php get_footer(); ?>