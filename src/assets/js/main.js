(function($){
    $(function() {
        $('.js-scroll-description').click(function() {
            $('body').animate({
                scrollTop: $('.description').offset().top
            }, 500);
        });
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
