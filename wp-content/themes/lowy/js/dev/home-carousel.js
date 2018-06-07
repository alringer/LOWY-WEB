
(function ($, root, undefined) {
    $(document).ready(function() {
        $("#featuredCatCarousel").swiperight(function() {
           $(this).carousel('prev');
         });
        $("#featuredCatCarousel").swipeleft(function() {
           $(this).carousel('next');
        });
     });
})(jQuery, this);
