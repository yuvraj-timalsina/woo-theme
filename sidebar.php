<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Uv Woo
 */

if ( is_active_sidebar( 'uv-woo-main-sidebar' ) ) : ?>
    <aside class="col-12 col-lg-3 col-md-4 h-100">
		<?php dynamic_sidebar( 'uv-woo-main-sidebar' ); ?>
    </aside>
<?php endif;