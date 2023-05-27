<?php
/**
 * Template for displaying search forms in Uv Woo
 *
 * @package Uv Woo
 */
?>
<form role="search" method="get" class="search-form col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3"
      action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
        <input placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'uv_woo'); ?>" aria-label="Search"
               value="<?php echo get_search_query(); ?>" name="s"
               class="search-field  form-control border-end-0 border rounded-pill" type="search" id="search-input">
        <?php if (class_exists('WooCommerce')): ?>
            <input type="hidden" value="product" name="post_type" id="post_type">
        <?php endif; ?>
        <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-bottom-0 border rounded-pill ms-n5"
                            type="submit">
                        <span class="dashicons dashicons-search"></span>
                    </button>
                </span>
    </div>
</form>
