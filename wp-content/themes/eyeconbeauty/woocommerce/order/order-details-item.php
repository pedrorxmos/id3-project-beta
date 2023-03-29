<?php
/**
 * Order Item Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-item.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
	return;
}
?>

<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'cart_item', 'woocommerce-table__line-item order_item', $item, $order ) ); ?>">
	<?php
		$is_visible        = $product && $product->is_visible();
		$product_permalink = apply_filters( 'woocommerce_order_item_permalink', $is_visible ? $product->get_permalink( $item ) : '', $item, $order );
	?>
	<td class="product-info">
		<div class="product-thumbnail">
			<?php
				$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $product->get_image('cart-thumnail'), $cart_item, $cart_item_key );

				if ( ! $product_permalink ) {
					echo $thumbnail; // PHPCS: XSS ok.
				} else {
					printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
				}
			?>
		</div>
		<div class="product-details">
			<div class="product-name">
				<p class="name__category">
					<!-- Category  -->
					<?php
					$terms = get_the_terms( $product->get_id(), 'product_cat' );
					foreach ($terms as $term) {
							$product_cat_id = $term->term_id;
							echo get_the_category_by_ID($product_cat_id);
							break;
					} 
					?>
				</p>
				<?php echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', $product_permalink ? sprintf( '<a href="%s">%s</a>', $product_permalink, $item->get_name() ) : $item->get_name(), $item, $is_visible ) );?>
			</div>

			<div class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
				<?php
					echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
				?>
			</div>
		</div>
	</td>

	<td class="product-actions woocommerce-table__product-total product-total">
		<?php 
			$qty = $item->get_quantity();
			$refunded_qty = $order->get_qty_refunded_for_item( $item_id );

			if ( $refunded_qty ) {
				$qty_display = '<del>' . esc_html( $qty ) . '</del> <ins>' . esc_html( $qty - ( $refunded_qty * -1 ) ) . '</ins>';
			} else {
				$qty_display = esc_html( $qty );
			}

			echo apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity qty-just-text"> Qty: <span>' . sprintf( $qty_display ) . '</span></strong>', $item ); 
		?>
		<div class="product-subtotal">
			<?php echo $order->get_formatted_line_subtotal( $item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</td>

</tr>

<?php if ( $show_purchase_note && $purchase_note ) : ?>

<tr class="woocommerce-table__product-purchase-note product-purchase-note">

	<td colspan="2"><?php echo wpautop( do_shortcode( wp_kses_post( $purchase_note ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></td>

</tr>

<?php endif; ?>
