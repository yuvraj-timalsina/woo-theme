<?php
/**
 * The template for the sidebar containing the woocommerce widget area
 *
 * @package Uv Woo
 */

if ( is_active_sidebar( 'uv-woo-shop-sidebar' ) ) :
	dynamic_sidebar( 'uv-woo-shop-sidebar' );
endif;