<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	//do_action( 'woocommerce_before_single_product_summary' );
	?>

	<!-- <div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>
	</div> -->

	<div class="container product-title-top">
		<?php woocommerce_template_single_title(); ?>
		<h3><?php echo wc_get_product_category_list( $product->get_id(), ', ', '' . _n( '', '', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '' ); ?></h3>
	</div>

	<div class="product-main">

	
	<?php
		woocommerce_show_product_images();
	?>
		<div class="product-detail">

		<div class="container product-title-detail">
			<?php woocommerce_template_single_title(); ?>
			<h3><?php echo wc_get_product_category_list( $product->get_id(), ', ', '' . _n( '', '', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '' ); ?></h3>
		</div>

			<div class="product-description">

				<div class="description__info">
					<?php
						woocommerce_template_single_excerpt(); //Short description
						woocommerce_output_product_data_tabs();
					?>
					<?php while ( have_rows ( 'custom_prod_attributes' ) ) : the_row(); ?>

					<div class="info-group">
						<button class="info-group__toggle">
							<?php echo get_sub_field ( 'attr_name' ); ?>
							
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="toggle-icon minus">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
							</svg>

							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="toggle-icon plus">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
							</svg>

						</button>
						<p class="info-group__content">
							<?php echo get_sub_field ( 'attr_content' ); ?>
						</p>
					</div>
					
					<?php endwhile; ?>
				</div>
				<?php
					woocommerce_template_single_add_to_cart();
				?>

			</div>
			
		</div>

	</div>
	<?php
		woocommerce_upsell_display();
	?>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
