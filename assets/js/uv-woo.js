// Add hover and click behavior for Bootstrap dropdowns
(function($) {
    $(document).ready(function() {
        $('.dropdown').on('mouseenter click', function() {
            $(this).addClass('show').find('.dropdown-menu').addClass('show');
        }).on('mouseleave', function() {
            $(this).removeClass('show').find('.dropdown-menu').removeClass('show');
        });
    });
})(jQuery);

// Flexslider script
$(document).ready(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlsContainer: $(".custom-controls-container"),
        customDirectionNav: $(".custom-navigation a")
    });
});
