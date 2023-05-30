<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package Uv Woo
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container">
                <div class="row">
					<?php
					while ( have_posts() ) :the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header>
                                <h1><?php the_title(); ?></h1>
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
                                <div class="post-thumbnail">
									<?php
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'uv-woo-blog', [ 'class' => 'img-fluid' ] );
									endif;
									?>
                                </div>
                            </header>
                            <div class="content">
								<?php
								the_content();
								wp_link_pages( [
									'before' => '<p class="inner-pagination">' . 'Pages',
									'after'  => '</p>'
								] );
                                ?>
                            </div>
                        </article>
						<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
					?>
                </div>
            </div>

        </main>
    </div>

<?php get_footer(); ?>