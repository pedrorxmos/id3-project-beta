<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$base_var = (get_the_title() === 'Shimmer') ? 'bottle' : 'lavender-haze';

$base_name_var = (get_the_title() === 'Shimmer') ? 'Bottle' : 'Lavender Haze';

$url_components = parse_url($actual_link);
parse_str($url_components['query'], $params);

// Display result
$var = $params['attribute_pa_shade'];

$var_name = str_replace("-", " ", $var);
$var_name = ucwords($var_name);

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="product-wrapper variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">

<?php do_action( 'woocommerce_before_variations_form' ); ?>

<span class="product-wrapper__dropdown dropdown-button">
	<div class="dropdown__title">
		<img class="dd-title__img" src="/wp-content/uploads/2023/03/<?php echo $var ? $var : $base_var ?>-shade.png" alt="Shade color">
		<p class="dd-title__name"><?php echo $var_name ? $var_name : $base_name_var ?></p>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="toggle-icon down">
		<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
	</svg>

	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="toggle-icon up">
		<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
	</svg>
</span>

<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
	<p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
<?php else : ?>
	<table class="variations product-wrapper__table dropdown-content" cellspacing="0" role="presentation">
		<tbody>
			<?php foreach ( $attributes as $attribute_name => $options ) : ?>
				<tr>
					<!-- <th class="label"><label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label></th> -->
					<td class="value">
						<?php
							wc_dropdown_variation_attribute_options(
								array(
									'options'   => $options,
									'attribute' => $attribute_name,
									'product'   => $product,
								)
							);
							// echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
						?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_variations_table' ); ?>
	

		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>
<?php
do_action( 'woocommerce_after_add_to_cart_form' );
