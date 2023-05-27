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
    <div class="sticky-top">
        <!-- Nav -->
        <nav class="py-2 bg-body-tertiary border-bottom">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-4">
                        <ul class="nav">
                            <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Features</a></li>
                        </ul>
                    </div>
                    <!-- Search -->
                    <div class="col-4">
                        <?php get_search_form(); ?>
                    </div>


                    <div class="col-4">
                        <!-- Account -->
                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                     class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small" style="">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="p-3 border-bottom nav-header">
            <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <!-- Logo -->
                <a href="<?= get_home_url('/'); ?>"
                   class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none fw-bold">
                    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30"
                         height="24" class="d-inline-block align-text-top">
                    <span class="ms-2">Uv Woo</span>
                </a>

                <?php wp_nav_menu([
                    'menu' => 'Uv Woo Nav Menu',
                    'theme_location' => 'uv_woo_main_menu',
                    'container' => false,
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="nav col-12 col-lg-auto mx-auto mb-2 justify-content-center mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new Bootstrap_5_Navwalker(),
                ]); ?>

                <!-- Cart -->
                <ul class="nav float-end mb-3">
                    <li class="nav-item">
                        <a href="#" class="cart-link position-relative">
                            <span class="cart-text position-absolute fw-bold pb-md-4">(2 items)</span>
                            <span class="dashicons dashicons-cart cart-icon"></span>
                            <span class="cart-counter position-absolute fw-bold">10</span>
                        </a>
                    </li>
                </ul>

            </div>
        </header>
    </div>

