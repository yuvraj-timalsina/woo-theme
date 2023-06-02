<?php
/**
 * The footer template file
 *
 * Displays the footer of the theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Uv Woo
 */
?>
<!-- Footer -->
<footer>
    <section class="footer-widgets bg-dark text-light">
        <div class="container">
            <div class="row">
                <!-- Footer Widgets -->
				<?php if ( is_active_sidebar( 'uv-woo-footer-sidebar-one' ) ) : ?>
                    <div class="col-12 col-md-4">
						<?php dynamic_sidebar( 'uv-woo-footer-sidebar-one' ); ?>
                    </div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'uv-woo-footer-sidebar-two' ) ) : ?>
                    <div class="col-12 col-md-4">
						<?php dynamic_sidebar( 'uv-woo-footer-sidebar-two' ); ?>
                    </div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'uv-woo-footer-sidebar-three' ) ) : ?>
                    <div class="col-12 col-md-4">
						<?php dynamic_sidebar( 'uv-woo-footer-sidebar-three' ); ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container-fluid">
            <div class="row align-items-center fw-medium text-secondary justify-content-center text-center pt-1">
                <div class="copyright-text col-6">
					<?php echo esc_html( get_theme_mod( 'settings_copyright', __( '© Copyright 2018 - 2023 | All Rights Reserved!', 'uv-woo' ) ) ); ?>
                </div>
                <?php if (class_exists('WooCommerce')) : ?>
                <div class="useful-links col-6">
                    <nav class="footer-menu navbar navbar-expand-lg">
						<?php wp_nav_menu( [
							'menu'            => esc_html__( 'Uv Woo Footer Menu', 'uv-woo' ),
							'theme_location'  => 'uv_woo_footer_menu',
							'depth'           => 1,
							'menu_class'      => 'navbar-nav',
							'container'       => 'div',
							'container_class' => 'container-fluid'
						] );
						?>
                    </nav>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>