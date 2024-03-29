<?php
/**
 * This template is for displaying archive pages
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
                    <div class="col-12 col-lg-9 col-md-8">
					<?php
					the_archive_title( '<h1 class="article-title">', '</h1>' );
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'archive' );
						endwhile;
						the_posts_pagination( [
							'prev_text' => esc_html__('Prev', 'uv-woo'),
							'next_text' => esc_html__('Next', 'uv-woo')
						] );
					else:
						?>
                        <p><?php esc_html_e('No Posts Found!', 'uv-woo'); ?></p>
					<?php endif; ?>
                    </div>
	                <?php get_sidebar(); ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();