<?php /* Template name: Shop */ ?>

<?php get_header(); the_post();?>
  <main>
    <div class="container">
      <h2><?php the_title();?></h2>

    </div>
    
    <div class="product-list">
      <?php
        $slug = $post->post_name;
        $params = array(
          'posts_per_page' => 5, 
          'product_cat' => $slug, 
          'post_type' => 'product')
        ;

        $wc_query = new WP_Query($params);
      ?>

      <?php if ($wc_query->have_posts()) : ?>
      <?php while ($wc_query->have_posts()) : $wc_query->the_post(); ?>
        <div class="product-card">
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail() ?>
          </a>
          
          <div class="product-info">
            <a href="<?php the_permalink() ?>">
              <div class="product-info__info">
                <p class="product-info__category">
                  Category
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
            
            <button class="btn btn-secondary product-info__add-button">
              Add to bag
            </button>
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

  </main>
<?php get_footer(); ?>