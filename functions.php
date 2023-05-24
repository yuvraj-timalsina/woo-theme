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
    // Enqueue main style
    wp_enqueue_style('uv_woo_main_style', get_stylesheet_uri(), [], '1.0', 'all');
    // Enqueue other styles
    wp_enqueue_style('uv_woo_style', get_template_directory_uri() . '/css/your-style.css', array(), '1.0');

    // Enqueue script
    wp_enqueue_script('uv_woo_script', get_template_directory_uri() . '/js/your-script.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'uv_woo_enqueue_styles_and_scripts');
