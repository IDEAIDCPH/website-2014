function scrollReadMore() {
    $('body,html').animate({scrollTop: $('.description').offset().top }, 500);
}(function($){
    $(function() {
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
