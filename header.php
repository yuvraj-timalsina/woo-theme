<?php
/**
 * The header template file
 *
 * Displays the header of the theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Uv Woo
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <!-- Header -->
    <header class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                logo
                <div class="col-6 col-md-3">
                    <!-- Logo code goes here -->
                </div>

                <!-- Account -->
                <div class="col-6 col-md-3 text-end">
                    <!-- Account code goes here -->
                    account
                </div>

                <!-- Search -->
                <div class="col-md-6 mt-3 mt-md-0">
                    <!-- Search form code goes here -->
                    search
                </div>

                <!-- Menu -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <!-- Menu code goes here -->
                    <?php wp_nav_menu([
                        'menu' => 'Uv Woo Nav Menu',
                        'theme_location' => 'uv_woo_main_menu',
                        'menu_class' => 'navbar-nav fw-bold',
                        'container' => 'div',
                        'container_class' => 'container-fluid'
                    ]); ?>
                </nav>
            </div>
        </div>
    </header>