<?php
/**
 * WooCommerce Customizations
 *
 * This file contains custom modifications for the WooCommerce shop page.
 * It adds and modifies various elements on the shop page, including opening and closing divs,
 * removing the default sidebar, and adding custom sidebar elements.
 */
function uv_woo_wc_modifications(): void {

	// Function to open the container and row divs for the WooCommerce shop content
	add_action( 'woocommerce_before_main_content', 'uv_woo_open_container_row', 5 );
	function uv_woo_open_container_row(): void {
		echo '<div class="shop-content container"><div class="row">';
	}

	// Function to close the container and row divs for the WooCommerce shop content
	add_action( 'woocommerce_after_main_content', 'uv_woo_close_container_row', 5 );
	function uv_woo_close_container_row(): void {
		echo '</div></div>';
	}

	// Remove the default WooCommerce sidebar action
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

	// Wrap the sidebar related functions and actions in a conditional check for the shop page
	if ( is_shop() ) {
		// Function to open the sidebar div for the WooCommerce shop content
		add_action( 'woocommerce_before_main_content', 'uv_woo_open_sidebar_tags', 6 );
		function uv_woo_open_sidebar_tags(): void {
			echo '<div class="shop-sidebar col-lg-3 col-md-4 order-2 order-md-1">';
		}

		// Add the default WooCommerce sidebar action
		add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

		// Function to close the sidebar div for the WooCommerce shop content
		add_action( 'woocommerce_before_main_content', 'uv_woo_close_sidebar_tags', 8 );
		function uv_woo_close_sidebar_tags(): void {
			echo '</div>';
		}

		// Function to open the shop div for the WooCommerce shop content
		add_action( 'woocommerce_before_main_content', 'uv_woo_open_shop_tags', 9 );
		function uv_woo_open_shop_tags(): void {
			echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
		}

		// Function to close the shop div for the WooCommerce shop content
		add_action( 'woocommerce_after_main_content', 'uv_woo_close_shop_tags', 4 );
		function uv_woo_close_shop_tags(): void {
			echo '</div>';
		}

		// Display the excerpt after the shop loop item title in WooCommerce.
		add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
	}

	// Show cart contents / total ajax
	function uv_woo_add_to_cart_fragment( $fragments ) {
		global $woocommerce;
		ob_start();
		?>
        <span class="cart-counter position-absolute fw-bold"><?= wc()->cart->get_cart_contents_count(); ?></span>
		<?php
		$fragments['span.cart-counter'] = ob_get_clean();

		return $fragments;
	}

	add_filter( 'woocommerce_add_to_cart_fragments', 'uv_woo_add_to_cart_fragment' );
}

add_action( 'wp', 'uv_woo_wc_modifications' );
