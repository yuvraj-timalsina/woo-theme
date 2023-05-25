<?php

// Function to open the container and row divs for the WooCommerce shop content
function uv_woo_open_container_row(): void
{
    echo '<div class="shop-content container mt-4"><div class="row">';
}

add_action('woocommerce_before_main_content', 'uv_woo_open_container_row', 5);

// Function to close the container and row divs for the WooCommerce shop content
function uv_woo_close_container_row(): void
{
    echo '</div></div>';
}

add_action('woocommerce_after_main_content', 'uv_woo_close_container_row', 5);

// Function to open the sidebar div for the WooCommerce shop content
function uv_woo_open_sidebar_tags(): void
{
    echo '<div class="shop-sidebar col-lg-3 col-md-4 order-2 order-md-1">';
}

add_action('woocommerce_before_main_content', 'uv_woo_open_sidebar_tags', 6);

// Remove the default WooCommerce sidebar action
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
// Add the default WooCommerce sidebar action
add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

// Function to close the sidebar div for the WooCommerce shop content
function uv_woo_close_sidebar_tags(): void
{
    echo '</div>';
}

add_action('woocommerce_before_main_content', 'uv_woo_close_sidebar_tags', 8);

// Function to open the shop div for the WooCommerce shop content
function uv_woo_open_shop_tags(): void
{
    echo '<div class="shop-sidebar col-lg-9 col-md-8 order-1 order-md-2">';
}

add_action('woocommerce_before_main_content', 'uv_woo_open_shop_tags', 9);

// Function to close the shop div for the WooCommerce shop content
function uv_woo_close_shop_tags(): void
{
    echo '</div>';
}

add_action('woocommerce_after_main_content', 'uv_woo_close_shop_tags', 4);
