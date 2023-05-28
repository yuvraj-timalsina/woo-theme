<?php
/**
 * Template Name: Home Template
 *
 * The template for displaying the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Uv Woo
 */
get_header();
?>
<div class="content-area">
    <main>
        <!-- Slider -->
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="slide1.jpg" />
                    </li>
                    <li>
                        <img src="slide2.jpg" />
                    </li>
                    <li>
                        <img src="slide3.jpg" />
                    </li>
                    <li>
                        <img src="slide4.jpg" />
                    </li>
                </ul>
            </div>
            <div class="custom-navigation">
                <a href="#" class="flex-prev">Prev</a>
                <div class="custom-controls-container"></div>
                <a href="#" class="flex-next">Next</a>
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
        </section>
    </main>
</div>

<?php get_footer();