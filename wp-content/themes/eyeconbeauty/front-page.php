<?php get_header(); ?>
  <main>
    <?php 
      get_template_part(
        'template-parts/hero-banner', 
        'hero-banner', 
        array(
          'id'	=> '104',
        )
      ) 
    ?>

    <?php 
      get_template_part(
        'template-parts/hero-banner', 
        'hero-banner', 
        array(
          'id'	=> '108',
        )
      ) 
    ?>
  </main>
<?php get_footer(); ?>