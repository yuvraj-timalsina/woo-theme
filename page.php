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
					while ( have_posts() ) : the_post(); ?>
                        <article class="col">
                            <h1><?php the_title(); ?> </h1>
                            <div><?php the_content(); ?></div>
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
                        </article>
					<?php endwhile; ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();