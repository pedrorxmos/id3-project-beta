<?php get_header(); the_post();?>
  <main>
    <h1 class="hide">404 Error</h1>
    <div class="error-container">
      <div class="error__info">
        <h2>Oops!</h2>
        <h3>It looks like the page you are looking for can't be found</h3>
        <p>Your link might be icorrect, moved or out of date</p>
      </div>
      

      <a href="<?php echo home_url( '/shop/' ); ?>" class="btn btn-main">Shop Eyecon Beauty</a>
    </div>

    <div class="product-slider">
    <div class="product-slider-title">
      <h2>Best Sellers</h2>
      <h3>check what's trending right now!</h3>
    </div>
    <div class="product-slider__wrapper left-carousel">
      <?php
        $params = array(
          'posts_per_page' => 8,
          'post_type' => array('product', 'product_variation'),
          'post__not_in' => array(312, 148), //Exclude general shimmer and matte shadow
          'orderby'        => 'popularity',
          );

        $wc_query = new WP_Query($params);
      ?>

      <?php if ($wc_query->have_posts()) : ?>
      <?php while ($wc_query->have_posts()) : $wc_query->the_post(); ?>
        <div class="product-card product-slider__card">
        <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail();?>
          </a>
          
          <div class="product-info">
            <a href="<?php the_permalink() ?>">
              <div class="product-info__info">
                <p class="product-info__category">
                  <!-- Category  -->
									<?php
									$terms = get_the_terms( $product->ID, 'product_cat' );
									foreach ($terms as $term) {
											$product_cat_id = $term->term_id;
											echo get_the_category_by_ID($product_cat_id);
											break;
									} 
									?>
                </p>
                <p class="product-info__name">
                  <?php the_title(); ?>
                </p>
                <div class="product-info__price">
                  <?php echo wc_price($product->get_price()); ?>

                  <?php if($product->is_on_sale()) : ?>
                    <span class="price__discount">
                      <?php echo wc_price($product->get_regular_price() ); ?>
                    </span>
                  <?php endif; ?>
                </div>
              </div>
            </a>

						<?php do_action( 'woocommerce_after_shop_loop_item' ); 
						?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else:  ?>
      <p>
        <?php _e( 'No Products'); ?>
      </p>
      <?php endif; ?>
    </div>
    <a href="<?php echo home_url( '/shop/' ); ?>" class="btn btn-main product-slider__btn">Shop Products</a>
  </div>
  </main>
<?php get_footer(); ?>