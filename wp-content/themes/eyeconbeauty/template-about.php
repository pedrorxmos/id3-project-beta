<?php /* Template Name: About */ ?>

<?php get_header(); the_post();?>
  <main>
    <h1 class="hide"><?php the_title(); ?></h1>
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="about-content">
      <?php while ( have_rows ( 'about_content' ) ) : the_row(); ?>
        <div class="about-group">
          <p><?php echo get_sub_field ( 'about_text' ); ?></p>
            <?php echo wp_get_attachment_image ( get_sub_field ( 'about_img' ), '', '', '' ); ?>
        </div>
      <?php endwhile; ?>
    </div>

    <?php 
      get_template_part('template-parts/community-slider');
    ?>
  </main>
<?php get_footer(); ?>