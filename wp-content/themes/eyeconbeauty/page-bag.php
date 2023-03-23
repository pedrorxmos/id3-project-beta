<?php get_header(); the_post();?>
  <main>
    <h1 class="hide"><?php the_title(); ?></h1>
    <h2 class="hide"><?php the_title(); ?></h2>
    <div class="container">
      <h3><?php the_title(); ?></h3>
      <?php 
        $subtitle = get_field('page_subtitle');
        if ( $subtitle ) : 
      ?>
        <h3><?php the_field( 'page_subtitle' );; ?></h3>
      <?php endif; ?>
      
    </div>
    <?php the_content() ?>
  </main>
<?php get_footer(); ?>