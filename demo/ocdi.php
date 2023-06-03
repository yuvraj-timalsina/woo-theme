<?php

function uv_woo_import_files(): array {
    return [
        [
            'import_file_name'             => 'Uv Woo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/uv-woo-demo-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/uv-woo-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/uv-woo-customizer.dat',
            'import_notice'                => __( 'This theme works best with WooCommerce installed.', 'uv-woo' ),
        ],
    ];
}
add_filter( 'pt-ocdi/import_files', 'uv_woo_import_files' );

function uv_woo_after_import_setup(): void {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Uv Woo Nav Menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Uv Woo Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', [
            'uv_woo_main_menu' => $main_menu->term_id,
            'uv_woo_footer_menu' => $footer_menu->term_id,
        ]
    );

    // Assign front page and posts page (blog page).
	$front_page = (new WP_Query(['post_type' => 'page', 'post_status' => 'publish', 'posts_per_page' => 1, 'title' => 'Home']))->have_posts() ? get_the_ID() : null;
	$blog_page = (new WP_Query(['post_type' => 'page', 'post_status' => 'publish', 'posts_per_page' => 1, 'title' => 'Blog']))->have_posts() ? get_the_ID() : null;

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page->ID );
    update_option( 'page_for_posts', $blog_page->ID );

}
add_action( 'pt-ocdi/after_import', 'uv_woo_after_import_setup' );