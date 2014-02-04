(function($){
    $(function() {
        $('.js-scroll-description').click(function() {
            $('body').animate({
                scrollTop: $('.description').offset().top
            }, 500);
        });

        $('.menu-toggle').click(function() {
            $(this).next('.menu-collapse').toggle();
        });

        $('.menu-collapse span').click(function() {
            $(this).next('ul').toggle();
        });

        $('.js-slider').infinitySlider();

        $('.video-player').click(function() {
            $(this)
              .find('iframe')
                .show()
                .animate({
                    opacity: 1
                }, function() {
                    //play
                });
        });
    });
})(jQuery);
