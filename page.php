<?php
/**
 * The template for displaying individual pages.
 *
 * This is the template file used to display individual pages in your theme.
 * It is used when no more specific template is available for the page being viewed.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Uv Woo
 */

get_header();
?>
    <div class="content-area">
        <main>
            <div class="container">
                <div class="row">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();