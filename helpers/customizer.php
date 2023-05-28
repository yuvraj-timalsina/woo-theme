<?php
/**
 * Uv Woo Theme customizer
 *
 * @package Uv Woo
 */

function uv_woo_customizer($wp_customize): void
{
    /**
     * Copyright section
     * */
    $wp_customize->add_section(
        'section_copyright', [
            'title' => 'Copyright Settings',
            'description' => 'Copyright Section',
        ]
    );
    // Field - copyright text box
    $wp_customize->add_setting(
        'settings_copyright', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'settings_copyright', [
            'label' => 'Copyright',
            'description' => 'Add your copyright information here',
            'section' => 'section_copyright',
            'type' => 'text'
        ]
    );

    /**
     * Slider section
     * */

    $wp_customize->add_section(
        'section_slider', [
            'title' => 'Slider Settings',
            'description' => 'Slider Section',
        ]
    );

    // Slider One
    // Field 1 - Slider Page Number 1
    $wp_customize->add_setting(
        'settings_slider_page_one', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_page_one', [
            'label' => 'Page One',
            'description' => 'Set Slider Page One',
            'section' => 'section_slider',
            'type' => 'dropdown-pages'
        ]
    );

    // Field 2 - Slider Button Text For Page 1
    $wp_customize->add_setting(
        'settings_slider_button_text_one', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_button_text_one', [
            'label' => 'Button Text',
            'description' => 'Button Text for Page One',
            'section' => 'section_slider',
            'type' => 'text'
        ]
    );

    // Field 3 - Slider Button URL For Page 1
    $wp_customize->add_setting(
        'settings_slider_button_url_one', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_button_url_one', [
            'label' => 'Button URL',
            'description' => 'Button URL for Page One',
            'section' => 'section_slider',
            'type' => 'url'
        ]
    );

    // Slider Two
    // Field 1 - Slider Page Number 2
    $wp_customize->add_setting(
        'settings_slider_page_two', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_page_two', [
            'label' => 'Page Two',
            'description' => 'Set Slider Page Two',
            'section' => 'section_slider',
            'type' => 'dropdown-pages'
        ]
    );

    // Field 2 - Slider Button Text For Page 2
    $wp_customize->add_setting(
        'settings_slider_button_text_two', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_button_text_two', [
            'label' => 'Button Text',
            'description' => 'Button Text for Page Two',
            'section' => 'section_slider',
            'type' => 'text'
        ]
    );

    // Field 3 - Slider Button URL For Page 1
    $wp_customize->add_setting(
        'settings_slider_button_url_two', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_button_url_two', [
            'label' => 'Button URL',
            'description' => 'Button URL for Page Two',
            'section' => 'section_slider',
            'type' => 'url'
        ]
    );

    // Slider Three
    // Field 1 - Slider Page Number 3
    $wp_customize->add_setting(
        'settings_slider_page_three', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_page_three', [
            'label' => 'Page Three',
            'description' => 'Set Slider Page Three',
            'section' => 'section_slider',
            'type' => 'dropdown-pages'
        ]
    );

    // Field 2 - Slider Button Text for Page 3
    $wp_customize->add_setting(
        'settings_slider_button_text_three', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_button_text_three', [
            'label' => 'Button Text',
            'description' => 'Button Text for Page Three',
            'section' => 'section_slider',
            'type' => 'text'
        ]
    );

    // Field 3 - Slider Button URL for Page 3
    $wp_customize->add_setting(
        'settings_slider_button_url_three', [
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ]
    );

    $wp_customize->add_control(
        'settings_slider_button_url_three', [
            'label' => 'Button URL',
            'description' => 'Button URL for Page Three',
            'section' => 'section_slider',
            'type' => 'url'
        ]
    );
}

add_action('customize_register', 'uv_woo_customizer');