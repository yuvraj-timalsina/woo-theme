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
<?php wp_body_open(); ?>
<div id="page" class="site">

    <!-- Navbar -->
    <div class="container-fluid sticky-top">
        <nav class="main-menu navbar navbar-expand-lg p-3 nav-bg">
            <div class="container">
				<?php
				if ( has_custom_logo() ) : the_custom_logo();
				else: ?>
                    <a href="<?php echo esc_url( get_home_url( '/' ) ); ?>"
                       class="site-title navbar-brand fw-bold"><?php bloginfo( 'title' ); ?></a>
                    <span><?php bloginfo( 'description' ); ?></span>
				<?php endif;
				?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle Navigation', 'uv-woo' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
				<?php
				wp_nav_menu( [
					'menu'            => esc_html__( 'Uv Woo Nav Menu', 'uv-woo' ),
					'theme_location'  => 'uv_woo_main_menu',
					'menu_class'      => 'navbar-nav',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'main_nav',
					'fallback_cb'     => '__return_false',
					'items_wrap'      => '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
					'depth'           => 3,
					'walker'          => new Bootstrap_5_Navwalker(),
				] );
				?>
                <div class="align-items-center d-flex gap-5">
					<?php
					get_search_form();
					if ( class_exists( 'WooCommerce' ) ) : ?>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart-link position-relative">
                                <span class="dashicons dashicons-cart cart-icon"></span>
                                <span class="cart-counter position-absolute fw-bold"><?php echo esc_html( wc()->cart->get_cart_contents_count() ); ?></span>
                            </a>
                        </li>
                    </ul>
					<?php if ( is_user_logged_in() ) : ?>
                    <!-- Account -->
                    <div class="dropdown">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img src="<?php echo esc_url( get_avatar_url( wp_get_current_user()->ID ) ); ?>"
                                 alt="<?php echo wp_get_current_user()->display_name ?>"
                                 width="25" height="25"
                                 class="rounded-circle"><span
                                    class="ms-2 fw-bold"><?php echo wp_get_current_user()->display_name ?></span>
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
                                   href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ); ?>">
									<?php esc_html_e( 'Log Out', 'uv-woo' ); ?></a></li>
                        </ul>
						<?php else : ?>
                            <ul class="nav float-end">
                                <li class="nav-item">
                                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>"
                                       class="nav-link link-dark px-2"><?php esc_html_e( 'Login / Register', 'uv-woo' ); ?></a>
                                </li>
                            </ul>
						<?php endif;
						endif; ?>
                    </div>
                </div>
        </nav>
    </div>



