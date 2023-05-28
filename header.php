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
            <div class="container d-flex flex-wrap gap-3 align-items-center justify-content-center justify-content-lg-between justify-content-md-center">
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Features</a></li>
                </ul>
                <!-- Search -->
               <div class="w-50 w-lg-25">
                   <?php get_search_form(); ?>
               </div>
                <?php if (class_exists('WooCommerce')) : ?>
                    <!-- Account -->
                    <?php if (is_user_logged_in()) : ?>
                        <div class="dropdown">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img src="<?= esc_url(get_avatar_url(wp_get_current_user()->ID)); ?>" alt="mdo"
                                 width="25" height="25"
                                 class="rounded-circle"><span
                                    class="ms-2 fw-bold"><?= wp_get_current_user()->display_name ?></span>
                        </a>
                        <ul class="dropdown-menu text-small" style="">
                            <li><a class="dropdown-item"
                                   href="<?= wc_get_page_permalink('myaccount') ?>"><?php _e('Dashboard', 'uv-woo'); ?></a>
                            </li>
                            <li><a class="dropdown-item"
                                   href="<?= wc_get_account_endpoint_url('edit-account') ?>"><?php _e('Profile', 'uv-woo'); ?></a>
                            </li>
                            <li><a class="dropdown-item"
                                   href="<?= wc_get_account_endpoint_url('orders') ?>"><?php _e('Orders', 'uv-woo'); ?></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item"
                                   href="<?= esc_url(wp_logout_url(get_permalink(get_option('woocommerce_myaccount_page_id')))); ?>">Log
                                    Out</a></li>
                        </ul>
                    <?php else : ?>
                        <ul class="nav float-end">
                            <li class="nav-item"><a
                                        href="<?= esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>"
                                        class="nav-link link-dark px-2">Login / Register</a></li>
                        </ul>
                    <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
        <!-- Header -->
        <header class="p-3 border-bottom nav-header">
            <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between justify-content-md-center">
                <!-- Logo -->
                <?php
                if (has_custom_logo()) :
                    the_custom_logo();
                else: ?>
                    <a href="<?= get_home_url('/'); ?>" class="site-title fw-bold"><?php bloginfo('title'); ?></a>
                    <span><?php bloginfo('description'); ?></span>
                <?php endif; ?>

                <?php wp_nav_menu([
                    'menu' => 'Uv Woo Nav Menu',
                    'theme_location' => 'uv_woo_main_menu',
                    'container' => false,
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new Bootstrap_5_Navwalker(),
                ]); ?>

                <!-- Cart -->
                <ul class="nav float-end">
                    <li class="nav-item">
                        <a href="<?= wc_get_cart_url(); ?>" class="cart-link position-relative">
                            <span class="dashicons dashicons-cart cart-icon"></span>
                            <span class="cart-counter position-absolute fw-bold"><?= wc()->cart->get_cart_contents_count(); ?></span>
                        </a>
                    </li>
                </ul>

            </div>
        </header>
    </div>

