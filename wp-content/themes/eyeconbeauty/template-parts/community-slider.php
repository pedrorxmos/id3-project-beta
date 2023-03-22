<div class="community-slider">
  <div class="community-slider-title">
    <h2>Our Comunity</h2>
    <h3>share your #eyeconic look and tag @eyeconbeauty on social media for a chance to be featured!</h3>
  </div>

  <div class="community-slider-wrapper left-carousel">
    <?php
      $params = array(
        'post_type' => 'Community',
        'orderby' => 'title',
        'order'   => 'ASC',
        );

      $wc_query = new WP_Query($params);
    ?>
    
    <?php if ($wc_query->have_posts()) : ?>
    <?php while ($wc_query->have_posts()) : $wc_query->the_post(); ?>
      <div class="community-images__pair">
        <?php while ( have_rows ( 'community_post' ) ) : the_row(); ?>
          <a href="https://www.instagram.com/<?php echo get_sub_field ( 'community_username' ); ?>" target="_blank">
            <?php echo wp_get_attachment_image ( get_sub_field ( 'community_img' ), '', '', array ( 'class' => 'round' ) ); ?>
            <span>@<?php echo get_sub_field ( 'community_username' ); ?></span>
          </a>
        <?php endwhile; ?>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
    <p>
      <?php _e( 'No Posts'); ?>
    </p>
    <?php endif; ?>
  </div>
</div>