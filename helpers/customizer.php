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
			'title'       => __( 'Copyright Settings', 'uv-woo' ),
			'description' => __( 'Copyright Section', 'uv-woo' ),
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
			'label'       => __( 'Copyright', 'uv-woo' ),
			'description' => __( 'Add your copyright information here', 'uv-woo' ),
			'section'     => 'section_copyright',
			'type'        => 'text'
		]
	);

	/**
	 * Slider section
	 * */

	$slider_pages = [
		[
			'page_number'      => 1,
			'button_text'      => 'Page One',
			'button_text_desc' => 'Button Text for Page One',
			'button_url_desc'  => 'Button URL for Page One'
		],
		[
			'page_number'      => 2,
			'button_text'      => 'Page Two',
			'button_text_desc' => 'Button Text for Page Two',
			'button_url_desc'  => 'Button URL for Page Two'
		],
		[
			'page_number'      => 3,
			'button_text'      => 'Page Three',
			'button_text_desc' => 'Button Text for Page Three',
			'button_url_desc'  => 'Button URL for Page Three'
		]
	];

	foreach ($slider_pages as $slider_page) {
		$page_number      = $slider_page['page_number'];
		$button_text      = $slider_page['button_text'];
		$button_text_desc = $slider_page['button_text_desc'];
		$button_url_desc  = $slider_page['button_url_desc'];

		$wp_customize->add_section(
			'section_slider',
			[
				'title'       => __( 'Slider Settings', 'uv-woo' ),
				'description' => __( 'Slider Section', 'uv-woo' )
			]
		);

		// Field 1 - Slider Page Number
		$wp_customize->add_setting(
			'settings_slider_page_' . $page_number,
			[
				'type'              => 'theme_mod',
				'default'           => '',
				'sanitize_callback' => 'absint'
			]
		);

		$wp_customize->add_control(
			'settings_slider_page_' . $page_number,
			[
				'label'       => $button_text,
				'description' => __( 'Set Slider ' . $button_text, 'uv-woo' ),
				'section'     => 'section_slider',
				'type'        => 'dropdown-pages'
			]
		);

		// Field 2 - Slider Button Text
		$wp_customize->add_setting(
			'settings_slider_button_text_' . $page_number,
			[
				'type'              => 'theme_mod',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field'
			]
		);

		$wp_customize->add_control(
			'settings_slider_button_text_' . $page_number,
			[
				'label'       => __( 'Button Text', 'uv-woo' ),
				'description' => __( $button_text_desc, 'uv-woo' ),
				'section'     => 'section_slider',
				'type'        => 'text'
			]
		);

		// Field 3 - Slider Button URL
		$wp_customize->add_setting(
			'settings_slider_button_url_' . $page_number,
			[
				'type'              => 'theme_mod',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw'
			]
		);

		$wp_customize->add_control(
			'settings_slider_button_url_' . $page_number,
			[
				'label'       => __( 'Button URL', 'uv-woo' ),
				'description' => __( $button_url_desc, 'uv-woo' ),
				'section'     => 'section_slider',
				'type'        => 'url'
			]
		);
	}


	/**
	 * Homepage Settings
	 * */

	$wp_customize->add_section(
		'section_home_page', [
			'title'       => __( 'Home Page Products/Blog', 'uv-woo' ),
			'description' => __( 'Home Page Products/Blog Section', 'uv-woo' ),
		]
	);

	// Popular Products
	$wp_customize->add_setting(
		'settings_popular_title', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_popular_title', [
			'label'       => __( 'Popular Products - Title', 'uv-woo' ),
			'description' => __( 'Title For Popular Products Section', 'uv-woo' ),
			'section'     => 'section_home_page',
			'type'        => 'text'
		]
	);
	$wp_customize->add_setting(
		'settings_popular_max_num', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_popular_max_num', [
			'label'       => __( 'Popular Products - Max Number', 'uv-woo' ),
			'description' => __( 'Sets Max Number For Popular Products', 'uv-woo' ),
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
			'label'       => __( 'Popular Products - Max Columns', 'uv-woo' ),
			'description' => __( 'Sets Max Columns For Popular Products', 'uv-woo' ),
			'section'     => 'section_home_page',
			'type'        => 'number'
		]
	);
	// New Arrivals
	$wp_customize->add_setting(
		'settings_new_arrivals_title', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_new_arrivals_title', [
			'label'       => __( 'New Arrivals - Title', 'uv-woo' ),
			'description' => __( 'Title For New Arrivals Section', 'uv-woo' ),
			'section'     => 'section_home_page',
			'type'        => 'text'
		]
	);

	$wp_customize->add_setting(
		'settings_new_arrivals_max_num', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint'
		]
	);

	$wp_customize->add_control(
		'settings_new_arrivals_max_num', [
			'label'       => __( 'New Arrivals - Max Number', 'uv-woo' ),
			'description' => __( 'Sets Max Number For New Arrivals', 'uv-woo' ),
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
			'label'       => __( 'New Arrivals - Max Columns', 'uv-woo' ),
			'description' => __( 'Sets Max Columns For New Arrivals', 'uv-woo' ),
			'section'     => 'section_home_page',
			'type'        => 'number'
		]
	);

	// Deal of the Week
	$wp_customize->add_setting(
		'settings_deal_title', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_deal_title', [
			'label'       => __( 'Deal of The Week - Title', 'uv-woo' ),
			'description' => __( 'Title For Deal Of The Week Section', 'uv-woo' ),
			'section'     => 'section_home_page',
			'type'        => 'text'
		]
	);

	$wp_customize->add_setting(
		'settings_deal', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'settings_deal', [
		'label'       => __( 'Deal of the Week (Product ID)', 'uv-woo' ),
		'description' => __( 'Product ID to Display', 'uv-woo' ),
		'section'     => 'section_home_page',
		'type'        => 'select',
		'choices'     => uv_woo_get_featured_products(),
	] );

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
			'label'   => __( 'Show Deal of the Week?', 'uv-woo' ),
			'section' => 'section_home_page',
			'type'    => 'checkbox'
		]
	);

	// Blog Title
	$wp_customize->add_setting(
		'settings_blog_title', [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		]
	);

	$wp_customize->add_control(
		'settings_blog_title', [
			'label'       => __( 'Blog - Title', 'uv-woo' ),
			'description' => __( 'Title For Blog Section', 'uv-woo' ),
			'section'     => 'section_home_page',
			'type'        => 'text'
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

	$choices = [];

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