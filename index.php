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
            <!-- Slider -->
            <section class="slider">
                <div class="container">
                    <!-- Slider code goes here -->
                    <div class="row">slider</div>
                </div>
            </section>

            <!-- Promotions -->
            <section class="promotions">
                <div class="container">
                    <!-- Promotions code goes here -->
                    <div class="row">promotions</div>
                </div>
            </section>

            <!-- Popular Products -->
            <section class="popular-products">
                <div class="container">
                    <!-- Popular products code goes here -->
                    <div class="row">popular</div>
                </div>
            </section>

            <!-- New Arrivals -->
            <section class="new-arrivals">
                <div class="container">
                    <!-- New arrivals code goes here -->
                    <div class="row">
                        new arrivals
                    </div>
                </div>
            </section>

            <!-- Deal of the Week -->
            <section class="deal-of-the-week">
                <div class="container">
                    <!-- Deal of the week code goes here -->
                    <div class="row">
                        deal of the week
                    </div>
                </div>
            </section>

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