<?php
/**
 * Uv Woo Theme customizer
 *
 * @package Uv Woo
 */

function uv_woo_customizer( $wp_customize ): void {
	/**
	 * Copyright section
	 * */
	$wp_customize->add_section(
		'section_copyright', [
			'title'       => 'Copyright Settings',
			'description' => 'Copyright Section',
		]
	);
	// Field - copyright text box
	$wp_customize->add_setting(
		'settings_copyright', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_copyright', [
			'label'       => 'Copyright',
			'description' => 'Add your copyright information here',
			'section'     => 'section_copyright',
			'type'        => 'text'
		]
	);

	/**
	 * Slider section
	 * */

	$wp_customize->add_section(
		'section_slider', [
			'title'       => 'Slider Settings',
			'description' => 'Slider Section',
		]
	);

	// Slider One
	// Field 1 - Slider Page Number 1
	$wp_customize->add_setting(
		'settings_slider_page_1', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_slider_page_1', [
			'label'       => 'Page One',
			'description' => 'Set Slider Page One',
			'section'     => 'section_slider',
			'type'        => 'dropdown-pages'
		]
	);

	// Field 2 - Slider Button Text For Page 1
	$wp_customize->add_setting(
		'settings_slider_button_text_1', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_slider_button_text_1', [
			'label'       => 'Button Text',
			'description' => 'Button Text for Page One',
			'section'     => 'section_slider',
			'type'        => 'text'
		]
	);

	// Field 3 - Slider Button URL For Page 1
	$wp_customize->add_setting(
		'settings_slider_button_url_1', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw'
		]
	);

	$wp_customize->add_control(
		'settings_slider_button_url_1', [
			'label'       => 'Button URL',
			'description' => 'Button URL for Page One',
			'section'     => 'section_slider',
			'type'        => 'url'
		]
	);

	// Slider Two
	// Field 1 - Slider Page Number 2
	$wp_customize->add_setting(
		'settings_slider_page_2', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_slider_page_2', [
			'label'       => 'Page Two',
			'description' => 'Set Slider Page Two',
			'section'     => 'section_slider',
			'type'        => 'dropdown-pages'
		]
	);

	// Field 2 - Slider Button Text For Page 2
	$wp_customize->add_setting(
		'settings_slider_button_text_2', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_slider_button_text_2', [
			'label'       => 'Button Text',
			'description' => 'Button Text for Page Two',
			'section'     => 'section_slider',
			'type'        => 'text'
		]
	);

	// Field 3 - Slider Button URL For Page 1
	$wp_customize->add_setting(
		'settings_slider_button_url_2', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw'
		]
	);

	$wp_customize->add_control(
		'settings_slider_button_url_2', [
			'label'       => 'Button URL',
			'description' => 'Button URL for Page Two',
			'section'     => 'section_slider',
			'type'        => 'url'
		]
	);

	// Slider Three
	// Field 1 - Slider Page Number 3
	$wp_customize->add_setting(
		'settings_slider_page_3', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_slider_page_3', [
			'label'       => 'Page Three',
			'description' => 'Set Slider Page Three',
			'section'     => 'section_slider',
			'type'        => 'dropdown-pages'
		]
	);

	// Field 2 - Slider Button Text for Page 3
	$wp_customize->add_setting(
		'settings_slider_button_text_3', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_slider_button_text_3', [
			'label'       => 'Button Text',
			'description' => 'Button Text for Page Three',
			'section'     => 'section_slider',
			'type'        => 'text'
		]
	);

	// Field 3 - Slider Button URL for Page 3
	$wp_customize->add_setting(
		'settings_slider_button_url_3', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw'
		]
	);

	$wp_customize->add_control(
		'settings_slider_button_url_3', [
			'label'       => 'Button URL',
			'description' => 'Button URL for Page Three',
			'section'     => 'section_slider',
			'type'        => 'url'
		]
	);

	/**
	 * Homepage Settings
	 * */

	$wp_customize->add_section(
		'section_home_page', [
			'title'       => 'Home Page Products/Blog Settings',
			'description' => 'Home Page Section',
		]
	);

	// Popular Products
	$wp_customize->add_setting(
		'settings_popular_max_num', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_popular_max_num', [
			'label'       => 'Popular Products Max Number',
			'description' => 'Sets Max Number For Popular Products',
			'section'     => 'section_home_page',
			'type'        => 'number'
		]
	);

	$wp_customize->add_setting(
		'settings_popular_max_col', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_popular_max_col', [
			'label'       => 'Popular Products Max Columns',
			'description' => 'Sets Max Columns For Popular Products',
			'section'     => 'section_home_page',
			'type'        => 'number'
		]
	);

	// New Arrivals
	$wp_customize->add_setting(
		'settings_new_arrivals_max_num', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_new_arrivals_max_num', [
			'label'       => 'New Arrivals Max Number',
			'description' => 'Sets Max Number For New Arrivals',
			'section'     => 'section_home_page',
			'type'        => 'number'
		]
	);

	$wp_customize->add_setting(
		'settings_new_arrivals_max_col', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_new_arrivals_max_col', [
			'label'       => 'New Arrivals Max Columns',
			'description' => 'Sets Max Columns For New Arrivals',
			'section'     => 'section_home_page',
			'type'        => 'number'
		]
	);

// Deal of the Week
	$wp_customize->add_setting(
		'settings_deal',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'settings_deal',
		array(
			'label'       => 'Deal of the Week (Product ID)',
			'description' => 'Product ID to Display',
			'section'     => 'section_home_page',
			'type'        => 'select',
			'choices'     => uv_woo_get_featured_products(),
		)
	);

	// Deal of the Week Checkbox
	$wp_customize->add_setting(
		'settings_deal_show', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'uv_woo_sanitize_checkbox'
		]
	);

	$wp_customize->add_control(
		'settings_deal_show', [
			'label'   => 'Show Deal of the Week?',
			'section' => 'section_home_page',
			'type'    => 'checkbox'
		]
	);
}

add_action( 'customize_register', 'uv_woo_customizer' );

// Sanitize Checkbox
function uv_woo_sanitize_checkbox( $checked ): bool {
	return isset( $checked ) && true == $checked;
}

// Retrieve featured product IDs as choices for the dropdown
function uv_woo_get_featured_products(): array {
	$featured_product_ids = wc_get_featured_product_ids();

	$choices = array();

	foreach ( $featured_product_ids as $product_id ) {
		$stock_status  = get_post_meta( $product_id, '_stock_status', true );
		$sale_price    = get_post_meta( $product_id, '_sale_price', true );
		$regular_price = get_post_meta( $product_id, '_regular_price', true );

		if ( $stock_status !== 'outofstock' && ! empty( $sale_price ) && ! empty( $regular_price ) ) {
			$choices[ $product_id ] = get_the_title( $product_id );
		}
	}

	return $choices;
}


