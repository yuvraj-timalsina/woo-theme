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
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <?php wp_nav_menu([
                                'menu' => 'Uv Woo Nav Menu',
                                'theme_location' => 'uv_woo_main_menu',
                                'container'       => false,
                                'menu_class'      => '',
                                'fallback_cb'     => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                'depth'           => 2,
                                'walker'          => new Bootstrap_5_Navwalker(),
                            ]); ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>