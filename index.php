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
								'prev_text' => esc_html__( 'Prev', 'uv-woo' ),
								'next_text' => esc_html__( 'Next', 'uv-woo' )
							] );
						else:
							?>
                            <h1><?php esc_html_e( 'No Posts Found!', 'uv-woo' ); ?></h1>
                            <p><?php esc_html_e( 'Unfortunately, none of the results matched your search.', 'uv-woo' ); ?></p>
							<?php
							the_widget( 'WP_Widget_Recent_Posts', [
								'title'  => esc_html__( 'Take a look at Our Latest Posts', 'uv-woo' ),
								'number' => 5,
							] ); endif; ?>
                    </div>
					<?php get_sidebar(); ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();