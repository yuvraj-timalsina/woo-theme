<?php

/**
 * Display the currently used template file name and additional details in the WordPress admin bar (frontend only).
 *
 * @param WP_Admin_Bar $wp_admin_bar The WordPress admin bar object.
 */
function uv_woo_display_current_template(WP_Admin_Bar $wp_admin_bar): void
{
    // Check if the current user has the 'manage_options' capability and it's not the admin area
    if (current_user_can('manage_options') && !is_admin()) {
        global $template;
        $template_name = basename($template);
        $template_path = str_replace(ABSPATH, '', $template); // Get the relative path by removing the absolute server path

        // Determine if the template file is located in the themes or plugins directory
        $template_directory = '';
        if (str_contains($template_path, 'wp-content/themes/')) {
            $template_directory = 'themes';
            $template_path = str_replace('wp-content/themes/', '', $template_path);
        } elseif (str_contains($template_path, 'wp-content/plugins/')) {
            $template_directory = 'plugins';
            $template_path = str_replace('wp-content/plugins/', '', $template_path);
        }

        $args = [
            'id' => 'current-template',
            'title' => __('Current Template', 'uv-woo'). ': ' . $template_name,
            'meta' => [
                'class' => 'current-template',
                'title' => 'Template Path: ' . $template_directory . '/' . $template_path, // Additional detail: Template directory and path as the title attribute
                'data' => ['template-directory' => $template_directory] // Additional detail: Template directory information as data attribute
            ]
        ];

        // Add the custom menu item to the admin bar
        $wp_admin_bar->add_node($args);
    }
}

// Hook the uv_woo_display_current_template() function to the admin_bar_menu action with a high priority (999)
add_action('admin_bar_menu', 'uv_woo_display_current_template', 999);