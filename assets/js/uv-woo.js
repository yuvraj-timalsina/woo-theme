/*
Theme Name: Uv Woo
Description: Custom Js scripts for Uv Woo.
Author: Yv
Version: 1.0.0
*/
// Add hover and click behavior for Bootstrap dropdowns
(function ($) {
    $(document).ready(function () {
        $('.dropdown').on('mouseenter click', function () {
            $(this).addClass('show').find('.dropdown-menu').addClass('show');
        }).on('mouseleave', function () {
            $(this).removeClass('show').find('.dropdown-menu').removeClass('show');
        });
    });
})(jQuery);

// Flexslider script
jQuery(window).load(function () {
    jQuery('.flexslider').flexslider({
        animation: 'slide',
        touch: true,
        directionNav: false
    });
});

