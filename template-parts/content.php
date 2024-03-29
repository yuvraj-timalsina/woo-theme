<?php
/**
 * The template for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Uv Woo
 */
?>

<article <?php post_class(); ?>>
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="post-thumbnail" onclick="location.href='<?php the_permalink(); ?>';">
		<?php
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'uv-woo-blog', [ 'class' => 'img-fluid' ] );
		endif;
		?>
    </div>
    <div class="meta">
        <p><?php esc_html_e( 'Author', 'uv-woo' ) ?> : <?php the_author_posts_link(); ?>
            | <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a>
            <br>
			<?php if ( has_category() ) : ?>
				<?php esc_html_e( 'Categories', 'uv-woo' ); ?> : <span><?php the_category( ' | ' ); ?></span>
			<?php endif; ?>
            <br>
			<?php if ( has_tag() ) : ?>
				<?php esc_html_e( 'Tags', 'uv-woo' ); ?> : <span><?php the_tags( '', ', ' ); ?></span>
			<?php endif; ?>
        </p>
    </div>
	<?php if ( has_excerpt() ) : ?>
        <div class="content"><?php the_excerpt(); ?></div>
	<?php elseif ( strpos( $post->post_content, '<!--more-->' ) ) : ?>
        <div class="content"><?php the_content( 'Continue Reading' ); ?></div>
	<?php else: ?>
        <div class="content"><?php the_excerpt(); ?></div>
	<?php endif; ?>
</article>