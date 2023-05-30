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
                    <h1>Search results for : <?= get_search_query(); ?></h1>
					<?php
					get_search_form();
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
						the_posts_pagination( [
							'prev_text' => 'Prev',
							'next_text' => 'Next'
						] );
					else:
						?>
                        <p>No Results Found For Your Query!</p>
					<?php endif; ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();