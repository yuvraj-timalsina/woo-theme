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
                footer widgets
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-12 col-md-6">
                    Copyright
                </div>
                <nav class="footer-menu navbar navbar-expand-lg col-12 col-md-6 text-left text md-right">
                    <?php wp_nav_menu([
                        'menu' => 'Uv Woo Footer Menu',
                        'theme_location' => 'uv_woo_footer_menu',
                        'menu_class' => 'navbar-nav',
                        'container' => 'div',
                        'container_class' => 'container-fluid'
                    ]);
                    ?>
                </nav>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>