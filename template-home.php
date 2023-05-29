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

			<?php
			$popular_limit      = get_theme_mod( 'settings_popular_max_num', 4 );
			$popular_col        = get_theme_mod( 'settings_popular_max_col', 4 );
			$new_arrivals_limit = get_theme_mod( 'settings_new_arrivals_max_num', 4 );
			$new_arrivals_col   = get_theme_mod( 'settings_new_arrivals_max_col', 4 );
			?>

            <!-- Popular Products -->
            <section class="popular-products">
                <div class="container">
                    <h2>Popular Products</h2>
					<?= do_shortcode( '[products limit=" ' . $popular_limit . ' " columns="" ' . $popular_col . ' "" orderby="popularity"]' ); ?>
                </div>
            </section>

            <!-- New Arrivals -->
            <section class="new-arrivals">
                <div class="container">
                    <h2>New Arrivals</h2>
					<?= do_shortcode( '[products limit=" ' . $new_arrivals_limit . ' " columns="" ' . $new_arrivals_col . ' "" orderby="date"]' ); ?>
                </div>
            </section>

			<?php
			$show_deal     = get_theme_mod( 'settings_deal_show', 0 );
			$deal          = get_theme_mod( 'settings_deal' );
			$currency      = get_woocommerce_currency_symbol();
			$regular_price = floatval(get_post_meta( $deal, '_regular_price', true ));
			$sale_price    = floatval(get_post_meta( $deal, '_sale_price', true ));

			if ( $show_deal == 1 && ( ! empty( $deal ) ) ) :
				$discount_percentage = absint( 100 - ( ( $sale_price / $regular_price ) * 100 ) );
				?>
                <!-- Deal of the Week -->
                <section class="deal-of-the-week">
                    <div class="container">
                        <h2>Deal of the Week</h2>
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="deal-img col-12 col-md-6 text-center">
								<?= get_the_post_thumbnail( $deal, 'large', [ 'class' => 'img-fluid' ] ); ?>
                            </div>
                            <div class="deal-desc col-12 col-md-4 text-center">
                                <span class="discount">
                                    <?= $discount_percentage . '% OFF' ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
			<?php endif; ?>
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