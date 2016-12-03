<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class( $classes ); ?>>
	<div class="products-block">

		<?php
		/**
		 * woocommerce_before_shop_loop_item hook.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10
		 */
		//do_action( 'woocommerce_before_shop_loop_item' );

		/**
		 * woocommerce_before_shop_loop_item_title hook.
		 *
		 * @unhooked woocommerce_show_product_loop_sale_flash - 10 // See woocommerce.php line no: 19
		 * @unhooked woocommerce_template_loop_product_thumbnail // See woocommerce.php line no: 17
		 * @hooked estore_template_loop_product_thumbnail - 10 // See woocommerce.php line no: 19
		 */
		do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
		<div class="products-content-wrapper">
			<?php
				do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	//do_action( 'woocommerce_before_shop_loop_item_title' );
			/**
			 * woocommerce_shop_loop_item_title hook.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			do_action( 'woocommerce_shop_loop_item_title' );

			/**
			 * woocommerce_after_shop_loop_item_title hook.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );

			/**
			 * woocommerce_after_shop_loop_item hook.
			 *
			 * @unhooked woocommerce_template_loop_product_link_close - 5
			 * @unhooked woocommerce_template_loop_add_to_cart - 10 // See woocommerce.php line no: 25
			 * @hooked estore_template_loop_add_to_wishlist - 10 // See woocommerce.php line no: 27
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
			?>
		</div>

	</div>
</li>