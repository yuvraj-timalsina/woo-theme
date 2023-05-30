<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Uv Woo
 */
get_header(); ?>
    <div class="content-area">
        <main>
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1><?php _e('Page Not Found!', 'uv-woo'); ?></h1>
                        <p><?php _e('Unfortunately, the page you tried to reach does not exist here.', 'uv-woo'); ?></p>
                    </header>
					<?php
					the_widget( 'WP_Widget_Recent_Posts', [
						'title'  => __('Take a look at Our Latest Posts', 'uv-woo'),
						'number' => 5,
					] );
					?>
                </div>
            </div>
        </main>
    </div>
<?php get_footer();
