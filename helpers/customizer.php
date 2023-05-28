<?php
/**
 * Uv Woo Theme customizer
 *
 * @package Uv Woo
 */

function uv_woo_customizer($wp_customize)
{
    // Copyright section
    $wp_customize->add_section(
        'section_copyright', [
            'title' => 'Copyright Settings',
            'description' => 'Copyright Section'
        ]
    );
    // Field - Copyright text box
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
}

add_action('customize_register', 'uv_woo_customizer');