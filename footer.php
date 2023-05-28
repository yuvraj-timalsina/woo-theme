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
            <div class="row align-items-center fw-bold text-secondary">
                <div class="copyright-text col-6">
                    &copy; Copyright - <?= date('Y'); ?> |
                    <?= get_theme_mod('settings_copyright', 'All Rights Reserved!') ?>
                </div>
              <div class="useful-links col-6">
                  <nav class="footer-menu navbar navbar-expand-lg">
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
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>