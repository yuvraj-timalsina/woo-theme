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
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post(); ?>
                            <article <?php post_class(); ?>>
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-thumbnail">
									<?php
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'uv-woo-blog', [ 'class' => 'img-fluid' ] );
									endif;
									?>
                                </div>
                                <div class="meta">
                                    <p>Author : <?php the_author_posts_link(); ?> | <?= get_the_date(); ?>
                                        <br>
										<?php if ( has_category() ) : ?>
                                            Categories : <span><?php the_category( ' ' ); ?></span>
										<?php endif; ?>
                                        <br>
										<?php if ( has_tag() ) : ?>
                                            Tags : <span><?php the_tags( '', ', ' ); ?></span>
										<?php endif; ?>
                                    </p>
                                </div>
                                <div><?php the_excerpt(); ?></div>
                            </article>
						<?php
						endwhile;
						the_posts_pagination( [
							'prev_text' => 'Prev',
							'next_text' => 'Next'
						] );
					else:
						?>
                        <p>No Posts Found!</p>
					<?php endif; ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer();