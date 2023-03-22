<?php /* Template Name: Contact */ ?>

<?php get_header(); the_post();?>
  <main>
    <h1 class="hide"><?php the_title(); ?></h1>
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="contact-page">
      <section class="contact-page__section">
        <p>
          Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
        </p> 
        <div class="section__contacts">
          <?php while ( have_rows ( 'contact-ways' ) ) : the_row(); ?>
            <div class="contact--line">
            <?php echo get_sub_field ( 'contact_svg' ); ?>
            <?php echo get_sub_field ( 'contact_value' ); ?>
            </div>
          <?php endwhile; ?>
        </div>
      </section>
      <section class="contact-page__section">
        <p>
          Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
        </p> 
        <?php the_content() ?>
      </section>
    </div>
  </main>
<?php get_footer(); ?>