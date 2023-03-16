<?php get_header(); ?>
  <main>
    front-page.php
    <?php 
      get_template_part(
        'template-parts/hero-banner', 
        'hero-banner', 
        array(
          'slug'	=> 'home-banner-1',
        )
      ) 
    ?>
  </main>
<?php get_footer(); ?>