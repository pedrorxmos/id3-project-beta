<?php /* Template Name: About */ ?>

<?php get_header(); the_post();?>
  <main>
    <h1 class="hide"><?php the_title(); ?></h1>
    <div class="container gap-2rem">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="about-content">
      <?php the_content() ?>
    </div>

    <?php 
      get_template_part('template-parts/community-slider');
    ?>
  </main>
<?php get_footer(); ?>