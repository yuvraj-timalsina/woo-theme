<?php
/**
 * The template for displaying all single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Uv Woo
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 col-md-8">
						<?php
						while ( have_posts() ) :the_post();
							get_template_part( 'template-parts/content', 'single' );
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
						?>
                    </div>
					<?php get_sidebar(); ?>
                </div>
            </div>

        </main>
    </div>

<?php get_footer(); ?>