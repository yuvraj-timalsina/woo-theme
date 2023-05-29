<?php
/**
 *
 * This file contains custom functions and modifications
 * to enhance the functionality of our WordPress website.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions
 *
 * @package Uv Woo
 */
defined('ABSPATH') || exit;
/**
 * Enqueue styles and scripts for UV Woo theme.
 */
function uv_woo_enqueue_styles_and_scripts(): void
{
    // Bootstrap script and css
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.js', [], '5.3.0', true);
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.css', [], '5.3.0', 'all');

    // Flexslider script and css
    wp_enqueue_script('flexslider-script', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', ['jquery'], '2.7.2', true);
    wp_enqueue_style('flexslider-style', get_template_directory_uri() . '/inc/flexslider/flexslider.css', [], '2.7.2', 'all');

    // Uv Woo script and css
    wp_enqueue_script('uv-woo-script', get_template_directory_uri() . '/assets/js/uv-woo.js', [], '1.0.0', true);
    wp_enqueue_style('uv-woo-style', get_template_directory_uri() . '/assets/css/uv-woo.css', [], '1.0.0', 'all');

    // Enqueue dashicons and main stylesheet
    wp_enqueue_style('dashicons');
    wp_enqueue_style('uv-woo-main-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
}

// Hook the UV Woo enqueue styles and scripts function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'uv_woo_enqueue_styles_and_scripts');

/**
 * Disable Gutenberg Editor
 *
 * Disables the Gutenberg editor and reverts to the classic editor for all post types.
 */

function uv_woo_disable_gutenberg_editor(): void
{
    add_filter('use_block_editor_for_post_type', '__return_false', 10); // Disable Gutenberg editor for all post types
}

add_action('init', 'uv_woo_disable_gutenberg_editor');

// Include the navwalker class
require_once get_template_directory() . '/helpers/navwalker.php';

// Include the customizer class
require_once get_template_directory() . '/helpers/customizer.php';

/**
 * Theme configuration for UV Woo.
 *
 * Registers navigation menus for UV Woo theme.
 */
function uv_woo_config(): void
{
    // Register menus for UV Woo theme
    register_nav_menus([
        'uv_woo_main_menu' => 'Uv Woo Nav Menu',
        'uv_woo_footer_menu' => 'Uv Woo Footer Menu'
    ]);

    // Declare woocommerce support
    add_theme_support('woocommerce', [
        'thumbnail_image_width' => 150,
        'single_image_width' => 300,
        'product_grid' => [
	        'default_rows'    => 3,
	        'min_rows'        => 2,
	        'max_rows'        => 8,
	        'default_columns' => 4,
	        'min_columns'     => 2,
	        'max_columns'     => 5,
        ]
    ]);
    // Enable WooCommerce product gallery features
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('wc-product-gallery-lightbox');

    // Enable custom logo for theme
    add_theme_support('custom-logo',
        [
            'height' => 85,
            'width' => 165,
            'flex-height' => true,
            'flex-width' => true
        ]);

    // Define image size for slider
    add_image_size('uv-woo-slider', 1920, 800, ['center', 'center']);

    // Check if $content_width is already set; if not, assign the value 600
    isset($content_width) || $content_width = 600;

}

// Hook the UV Woo theme configuration function to the after_setup_theme action
add_action('after_setup_theme', 'uv_woo_config', 0);

// Check if the 'WooCommerce' class exists and include customizations file if it does
class_exists('WooCommerce') && require_once get_template_directory() . '/helpers/woo-customizations.php';

// Include the template helper file
require_once get_template_directory() . '/helpers/template-helper.php';




