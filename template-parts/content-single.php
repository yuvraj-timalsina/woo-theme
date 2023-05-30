<?php
/**
 * The template for displaying content in single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Uv Woo
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p><?php _e( 'Author' ) ?> : <?php the_author_posts_link(); ?> | <?= get_the_date(); ?>
                <br>
				<?php if ( has_category() ) : ?>
					<?php _e( 'Categories', 'uv-woo' ); ?> : <span><?php the_category( ' ' ); ?></span>
				<?php endif; ?>
                <br>
				<?php if ( has_tag() ) : ?>
					<?php _e( 'Tags', 'uv-woo' ); ?> : <span><?php the_tags( '', ', ' ); ?></span>
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
			'before' => '<p class="inner-pagination">' . __('Pages', 'uv-woo'),
			'after'  => '</p>'
		] );
		?>
    </div>
</article>