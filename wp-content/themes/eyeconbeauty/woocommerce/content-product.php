
<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
		
				<div <?php wc_product_class( 'product-card ', $product ); ?>>
				<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
				<a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail() ?>
          </a>
          
          <div class="product-info">
            <a href="<?php the_permalink() ?>" >
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

						<!-- <p class="added_to_cart">Added</p> -->
          </div>

	<!-- <?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?> -->
</div>
