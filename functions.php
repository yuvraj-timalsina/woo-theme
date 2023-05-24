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

function uv_woo_enqueue_styles_and_scripts(): void
{
    // Enqueue script
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/inc/bootstrap.min.js', ['jquery'], '5.3.0', true);

    // Enqueue style
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/inc/bootstrap.min.css', [], '5.3.0', 'all');
    wp_enqueue_style('uv-woo-custom-style', get_template_directory_uri() . '/assets/css/custom.css', [], '1.0', 'all');
    wp_enqueue_style('uv-woo-main-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');

}

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

function uv_woo_config(): void
{
    register_nav_menus([
        'uv_woo_main_menu' => 'Uv Woo Nav Menu'
    ]);
}

add_action('after_setup_theme', 'uv_woo_config', 0);