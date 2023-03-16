<?php get_header(); ?>
  <main>
    <?php 
      get_template_part(
        'template-parts/hero-banner', 
        'hero-banner', 
        array(
          'slug'	=> 'home-banner-1',
        )
      ) 
    ?>


    <?php 
      get_template_part(
        'template-parts/hero-banner', 
        'hero-banner', 
        array(
          'slug'	=> 'home-banner-2',
        )
      ) 
    ?>
  </main>
<?php get_footer(); ?>