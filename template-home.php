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
						<?php
						// Getting data from customizer for Slider
						for ( $i = 1; $i < 4; $i ++ ):
							$slider_page[ $i ]        = get_theme_mod( 'settings_slider_page_' . $i );
							$slider_button_text[ $i ] = get_theme_mod( 'settings_slider_button_text_' . $i );
							$slider_button_url[ $i ]  = get_theme_mod( 'settings_slider_button_url_' . $i );
						endfor;

						$args        = [
							'post_type'      => 'page',
							'posts_per_page' => 3
						];
						$slider_loop = new WP_Query( $args );
						$j           = 1;
						if ( $slider_loop->have_posts() ):
							while ( $slider_loop->have_posts() ):
								$slider_loop->the_post();
								?>
                                <li>
									<?php the_post_thumbnail( 'uv-woo-slider', [ 'class' => 'img-fluid' ] ); ?>
                                    <div class="container">
                                        <div class="slider-details-container">
                                            <div class="slider-title">
                                                <h1><?php the_title(); ?></h1>
                                            </div>
                                            <div class="slider-description">
                                                <div class="subtitle"><?php the_content(); ?></div>
                                                <a href="<?= $slider_button_url[ $j ]; ?>"
                                                   class="link"><?= $slider_button_text[ $j ] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								<?php
								$j ++;
							endwhile;
							wp_reset_postdata(); endif; ?>
                    </ul>
                </div>
            </section>

            <!-- Popular Products -->
            <section class="popular-products">
                <div class="container">
                    <div class="row">popular</div>
                </div>
            </section>

            <!-- New Arrivals -->
            <section class="new-arrivals">
                <div class="container">
                    <div class="row">
                        new arrivals
                    </div>
                </div>
            </section>

            <!-- Deal of the Week -->
            <section class="deal-of-the-week">
                <div class="container">
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
						if ( have_posts() ) :
							while ( have_posts() ) :
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