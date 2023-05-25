<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package Uv Woo
 */

get_header();
?>
    <div class="content-area">
        <main>
            <!-- News -->
            <section class="news">
                <div class="container">
                    <!-- News code goes here -->
                    <div class="row">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <article>
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </article>
                            <?php
                            endwhile;
                        else:
                            ?>
                            <p>No Posts!</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php get_footer(); ?>