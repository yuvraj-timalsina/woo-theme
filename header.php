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
    <meta charset="<?php bloginfo( 'charset' ); ?>>">
    <meta name="viewport"
                                                                                                                                                                                                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php function_exists('wp_body_open') && wp_body_open(); ?>
<div id="page" class="site">
        <!-- Navbar -->
        <nav class="main-menu navbar navbar-expand-lg p-3 bg-body-tertiary border-bottom fixed-top"
             aria-label="Offcanvas navbar large">
            <div class="container">
				<?php if ( has_custom_logo() ) : the_custom_logo();
				else : ?>
                    <a href="<?php echo esc_url( get_home_url( '/' ) ); ?>"
                       class="site-title navbar-brand fw-bold"><?php bloginfo( 'title' ); ?></a>
                    <span class="site-description"><?php bloginfo( 'description' ); ?></span>
				<?php endif; ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="<?php esc_attr_e( 'Toggle Navigation', 'uv-woo' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end bg-body-tertiary" tabindex="-1" id="offcanvasNavbar"
                     aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
	                        <?php if ( has_custom_logo() ) : the_custom_logo();
	                        else : ?>
                                <a href="<?php echo esc_url( get_home_url( '/' ) ); ?>"
                                   class="site-title navbar-brand fw-bold"><?php bloginfo( 'title' ); ?></a>
                                <span class="site-description"><?php bloginfo( 'description' ); ?></span>
	                        <?php endif; ?>
                        </h5>
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                                aria-label="<?php esc_attr_e( 'Close', 'uv-woo' ); ?>"></button>
                    </div>
                    <div class="offcanvas-body">
						<?php
						wp_nav_menu( [
							'menu'            => esc_html__('Uv Woo Nav Menu', 'uv-woo'),
							'theme_location'  => 'uv_woo_main_menu',
							'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3',
							'container'       => '__return_false',
							'container_class' => '__return_false',
							'container_id'    => '__return_false',
							'fallback_cb'     => '__return_false',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 3,
							'walker'          => new Bootstrap_5_Navwalker(),
						] );
						?>
                        <div class="align-items-center d-flex flex-wrap">
							<?php
							get_search_form();
							if ( class_exists( 'WooCommerce' ) ) : ?>
                            <ul class="nav mx-4 mt-3 mt-lg-0 mt-md-3">
                                <li class="nav-item">
                                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"
                                       class="cart-link position-relative">
                                        <span class="dashicons dashicons-cart cart-icon"></span>
                                        <span class="cart-counter position-absolute fw-bold"><?php echo esc_html( wc()->cart->get_cart_contents_count() ); ?></span>
                                    </a>
                                </li>
                            </ul>
							<?php if ( is_user_logged_in() ) : ?>
                            <!-- Account -->
                            <div class="dropdown">
                                <a href="#" class="d-block text-decoration-none dropdown-toggle"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo esc_url( get_avatar_url( wp_get_current_user()->ID ) ); ?>"
                                         alt="<?php echo wp_get_current_user()->display_name; ?>" width="25" height="25"
                                         class="rounded-circle">
                                    <span class="ms-2 fw-bold"><?php echo wp_get_current_user()->display_name; ?></span>
                                </a>
                                <ul class="dropdown-menu text-small">
                                    <li><a class="dropdown-item"
                                           href="<?php echo wc_get_page_permalink( 'myaccount' ) ?>"><?php esc_html_e( 'Dashboard', 'uv-woo' ); ?></a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="<?php echo wc_get_account_endpoint_url( 'edit-account' ) ?>"><?php esc_html_e( 'Profile', 'uv-woo' ); ?></a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="<?php echo wc_get_account_endpoint_url( 'orders' ) ?>"><?php esc_html_e( 'Orders', 'uv-woo' ); ?></a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ); ?>"><?php esc_html_e( 'Log Out', 'uv-woo' ); ?></a>
                                    </li>
                                </ul>
								<?php else : ?>
                                    <ul class="nav float-end">
                                        <li class="nav-item">
                                            <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>"
                                               class="nav-link account-link"><?php esc_html_e( 'Login / Register', 'uv-woo' ); ?></a>
                                        </li>
                                    </ul>
								<?php endif;
								endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>




