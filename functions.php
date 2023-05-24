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
    // enqueue script
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/inc/bootstrap.min.js', ['jquery'], '5.3.0', true);

    // enqueue style
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/inc/bootstrap.min.css', [], '5.3.0', 'all');
    wp_enqueue_style('uv-woo-main-style', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');

}

add_action('wp_enqueue_scripts', 'uv_woo_enqueue_styles_and_scripts');
