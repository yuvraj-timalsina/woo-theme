<?php
/**
 * The main template file
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
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content' );
							endwhile;
							the_posts_pagination( [
								'prev_text' => esc_html__('Prev', 'uv-woo'),
								'next_text' => esc_html__('Next', 'uv-woo')
							] );
						else:
							?>
                            <h5 ><?php esc_html_e('No Posts Found!', 'uv-woo'); ?></h5>
						<?php endif; ?>
                    </div>
					<?php get_sidebar(); ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();