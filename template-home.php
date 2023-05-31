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
                                                <a href="<?php echo esc_url( $slider_button_url[ $j ] ); ?>"
                                                   class="link"><?php echo esc_html( $slider_button_text[ $j ] ) ?></a>
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
			if ( class_exists( 'WooCommerce' ) ) :
				$popular_limit = get_theme_mod( 'settings_popular_max_num', 4 );
				$popular_col = get_theme_mod( 'settings_popular_max_col', 4 );
				$new_arrivals_limit = get_theme_mod( 'settings_new_arrivals_max_num', 4 );
				$new_arrivals_col = get_theme_mod( 'settings_new_arrivals_max_col', 4 );
				?>

                <!-- Popular Products -->
                <section class="popular-products">
                    <div class="container">
                        <div class="section-title">
                            <h2><?php echo esc_html( get_theme_mod( 'settings_popular_title', __( 'Popular Products', 'uv-woo' ) ) ); ?></h2>
                        </div>
						<?php echo do_shortcode( '[products limit=" ' . esc_attr( $popular_limit ) . ' " columns="" ' . esc_attr( $popular_col ) . ' "" orderby="popularity"]' ); ?>
                    </div>
                </section>

                <!-- New Arrivals -->
                <section class="new-arrivals">
                    <div class="container">
                        <div class="section-title">
                            <h2><?php echo esc_html( get_theme_mod( 'settings_new_arrivals_title', __( 'New Arrivals', 'uv-woo' ) ) ); ?></h2>
                        </div>
						<?php echo do_shortcode( '[products limit=" ' . esc_attr( $new_arrivals_limit ) . ' " columns="" ' . esc_attr( $new_arrivals_col ) . ' "" orderby="date"]' ); ?>
                    </div>
                </section>

				<?php
				$show_deal     = get_theme_mod( 'settings_deal_show', 0 );
				$deal          = get_theme_mod( 'settings_deal' );
				$currency      = get_woocommerce_currency_symbol();
				$regular_price = floatval( get_post_meta( $deal, '_regular_price', true ) );
				$sale_price    = floatval( get_post_meta( $deal, '_sale_price', true ) );

				if ( $show_deal == 1 && ( ! empty( $deal ) ) ) :
					$discount_percentage = absint( 100 - ( ( $sale_price / $regular_price ) * 100 ) );
					?>
                    <!-- Deal of the Week -->
                    <section class="deal-of-the-week">
                        <div class="container">
                            <div class="section-title">
                                <h2><?php echo esc_html( get_theme_mod( 'settings_deal_title', __( 'Deal of The Day', 'uv-woo' ) ) ); ?></h2>
                            </div>
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="deal-img col-12 col-md-6 text-center">
									<?php echo get_the_post_thumbnail( $deal, 'large', [ 'class' => 'img-fluid' ] ); ?>
                                </div>
                                <div class="deal-desc col-12 col-md-4 text-center">
                                <span class="discount">
                                    <?php echo esc_html( $discount_percentage . esc_html__( '% OFF', 'uv-woo' ) ); ?>
                                </span>
                                    <h3>
                                        <a href="<?php echo esc_url( get_permalink( $deal ) ); ?>"> <?php echo esc_html( get_the_title( $deal ) ); ?></a>
                                    </h3>
                                    <p><?php echo esc_html( get_the_excerpt( $deal ) ); ?></p>
                                    <div class="prices">
                                    <span class="regular_price">
                                       <?php echo esc_html( $currency ) . esc_html( $regular_price ); ?>

                                    </span>
                                        <span class="sale_price">
                                         <?php echo esc_html( $currency ) . esc_html( $sale_price ); ?>
                                    </span>
                                    </div>
                                    <a class="add-to-cart"
                                       href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>"><?php esc_html_e( 'Add To Cart', 'uv-woo' ); ?></a>
                                </div>
                            </div>
                        </div>
                    </section>
				<?php endif; endif; ?> <!-- WooCommerce class_exists End -->
            <!-- Blog -->
            <section class="uv-woo-blog">
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo esc_html( get_theme_mod( 'settings_blog_title', __( 'Latest News from Our Blog', 'uv-woo' ) ) ); ?></h2>
                    </div>
                    <div class="row">
						<?php
						$args = [
							'post_type'           => 'post',
							'ignore_sticky_posts' => true,
							'posts_per_page'      => 3
						];

						$blog_posts = new WP_Query( $args );
						if ( $blog_posts->have_posts() ) :
							while ( $blog_posts->have_posts() ) :
								$blog_posts->the_post(); ?>
                                <article class="col-12 col-md-4">
                                    <a href="<?php the_permalink(); ?>">
										<?php
										if ( has_post_thumbnail() ) :
											the_post_thumbnail( 'uv-woo-blog', [ 'class' => 'img-fluid' ] );
										endif;
										?>
                                    </a>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="excerpt"><?php the_excerpt(); ?></div>
                                </article>
							<?php
							endwhile;
							wp_reset_postdata();
						else:
							?>
                            <p><?php esc_html_e( 'No Posts Found!', 'uv-woo' ); ?></p>
						<?php endif; ?>
                    </div>
                </div>
            </section>

        </main>
    </div>

<?php get_footer();