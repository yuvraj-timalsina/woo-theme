<?php
/**
 * This template is for displaying search results page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Uv Woo
 */

get_header();
?>
    <div class="content-area">
        <main>
            <div class="container">
                <div class="row">
                    <h1><?php esc_html_e('Search results for', 'uv-woo'); ?> : <?= get_search_query(); ?></h1>
					<?php
					get_search_form();
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
						the_posts_pagination( [
							'prev_text' => esc_html__('Prev', 'uv-woo'),
							'next_text' => esc_html__('Next', 'uv-woo')
						] );
					else:
						?>
                        <p><?php esc_html_e('No Results Found For Your Query!', 'uv-woo'); ?></p>
					<?php endif; ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();