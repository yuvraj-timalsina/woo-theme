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
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <article>
                                    <h1><?php the_title(); ?> </h1>
                                    <div><?php the_content(); ?></div>
                                </article>
                            <?php
                            endwhile;
                        else:
                            ?>
                            <p>No Posts!</p>
                        <?php endif; ?>
                    </div>
                </div>
        </main>
    </div>

<?php get_footer();