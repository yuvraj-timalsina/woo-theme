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
                        <h1>Page Not Found!</h1>
                        <p>Unfortunately, the page you tried to reach does not exist here.</p>
                    </header>
					<?php
					the_widget( 'WP_Widget_Recent_Posts', [
						'title'  => 'Take a look at Our Latest Posts',
						'number' => 5,
					] );
					?>
                </div>
            </div>
        </main>
    </div>
<?php get_footer();
