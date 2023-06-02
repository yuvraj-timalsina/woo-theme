<?php
function uv_woo_sidebars(): void {
	register_sidebar( [
		'name'          => esc_html__( 'Uv Woo Main Sidebar', 'uv-woo' ),
		'id'            => 'uv-woo-main-sidebar',
		'description'   => esc_html__( 'Drag and Drop Your Widgets Here', 'uv-woo' ),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Uv Woo Shop Sidebar', 'uv-woo' ),
		'id'            => 'uv-woo-shop-sidebar',
		'description'   => esc_html__( 'Drag and Drop Your WooCommerce Widgets Here', 'uv-woo' ),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Uv Woo Footer Sidebar One', 'uv-woo' ),
		'id'            => 'uv-woo-footer-sidebar-one',
		'description'   => esc_html__( 'Drag and Drop Your Widgets Here', 'uv-woo' ),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	] );
	register_sidebar( [
		'name'          => esc_html__( 'Uv Woo Footer Sidebar Two', 'uv-woo' ),
		'id'            => 'uv-woo-footer-sidebar-two',
		'description'   => esc_html__( 'Drag and Drop Your Widgets Here', 'uv-woo' ),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	] );
	register_sidebar( [
		'name'          => esc_html__( 'Uv Woo Footer Sidebar Three', 'uv-woo' ),
		'id'            => 'uv-woo-footer-sidebar-three',
		'description'   => esc_html__( 'Drag and Drop Your Widgets Here', 'uv-woo' ),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	] );
}

add_action( 'widgets_init', 'uv_woo_sidebars' );