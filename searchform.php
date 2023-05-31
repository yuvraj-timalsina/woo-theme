<?php
/**
 * Template for displaying search forms in Uv Woo
 *
 * @package Uv Woo
 */
?>
    <form role="search" method="get" class="search-form d-flex mt-3 mt-lg-0"
          action="<?php echo esc_url(home_url('/')); ?>">
        <div class="input-group">
            <input placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'uv-woo'); ?>" aria-label="<?php echo esc_attr_x('Search', 'aria-label', 'uv-woo'); ?>"
                   value="<?php echo get_search_query(); ?>" name="s"
                   class="search-field form-control me-2 rounded" type="search" id="search-input">
			<?php if (class_exists('WooCommerce')): ?>
                <input type="hidden" value="product" name="post_type" id="post_type">
			<?php endif; ?>
            <span class="input-group-append">
                    <button class="btn uv-woo-btn-outline"
                            type="submit">
                        <span class="dashicons dashicons-search"></span>
                    </button>
                </span>
        </div>
    </form>