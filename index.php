<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
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
                                <h2><?php the_title(); ?></h2>
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