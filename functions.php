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

/**
 * Enqueue styles and scripts for UV Woo theme.
 */
function uv_woo_enqueue_styles_and_scripts(): void {
    // Enqueue Bootstrap script
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/inc/bootstrap.min.js', ['jquery'], '5.3.0', true);

    // Enqueue Bootstrap and custom styles
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/inc/bootstrap.min.css', [], '5.3.0', 'all');
    wp_enqueue_style('uv-woo-custom-style', get_template_directory_uri() . '/assets/css/custom.css', [], '1.0', 'all');
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

// Include the Bootstrap 5 Navwalker class
require_once get_template_directory() . '/inc/bootstrap-5-navwalker.php';

/**
 * Theme configuration for UV Woo.
 *
 * Registers navigation menus for UV Woo theme.
 */
function uv_woo_config(): void {
    // Register menus for UV Woo theme
    register_nav_menus([
        'uv_woo_main_menu' => 'Uv Woo Nav Menu',
        'uv_woo_footer_menu' => 'Uv Woo Footer Menu'
    ]);
}

// Hook the UV Woo theme configuration function to the after_setup_theme action
add_action('after_setup_theme', 'uv_woo_config', 0);


/**
 * Display the currently used template file name in the WordPress admin bar.
 *
 * @param WP_Admin_Bar $wp_admin_bar The WordPress admin bar object.
 */
function display_current_template_in_admin_bar(WP_Admin_Bar $wp_admin_bar): void {
    // Check if the current user has the 'manage_options' capability
    if (current_user_can('manage_options')) {
        global $template;
        $template_name = basename($template);

        $args = array(
            'id'    => 'current-template',
            'title' => 'Current Template: ' . $template_name,
            'meta'  => array(
                'class' => 'current-template',
            ),
        );

        // Add the custom menu item to the admin bar
        $wp_admin_bar->add_node($args);
    }
}
add_action('admin_bar_menu', 'display_current_template_in_admin_bar', 999);