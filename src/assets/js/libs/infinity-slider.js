(function($) {

    $.fn.infinitySlider = function(elms) {
        this.each(function() {
            var $slider = $(this);
            var $slideElms = $slider.find('li');
            var slideElmsWidths = $slideElms.map(function() { return $(this).outerWidth(true); }).toArray();

            var minElementWidth = Math.min.apply(Math, slideElmsWidths),
                maxElementWidth = Math.max.apply(Math, slideElmsWidths);

            $slideElms.each(function(i) {
                $(this).data('slider-index', i);
            });


            for(var j = 0; 0 < maxElementWidth; j++) {
                $slideElms
                    .eq(j)
                      .clone(true)
                        .hide()
                        .appendTo($slider);

                maxElementWidth -= slideElmsWidths[j];
            }


            var animation;
            function animateSlider() {
                var $firstElm = $slider.find('li:first'),
                    speed = 1000*$firstElm.outerWidth(true)/minElementWidth|0;

                animation = $slider.animate({
                    left:  -$firstElm.outerWidth(true)
                }, {duration: speed, easing: 'linear', complete: function() {

                        $slider.css({left: 0});

                        $firstElm.remove();
                        $slider.find('li').eq(j).clone(true).appendTo($slider);

                    animateSlider();
                }});
            }

            function calcSlider() {
                if(animation) animation.stop();

                var sliderWidth = slideElmsWidths
                    .reduce(function(sum, n) {
                        return sum + n;
                    }, 0);

                if(sliderWidth > $slider.parent().outerWidth())
                {
                    $slider.css({
                        position: 'relative'
                    });

                    $slider.find('li').show();

                    animateSlider();
                }
                else {
                    $slider.css({
                        position: 'static'
                    });

                    var unique = {};
                    $slider.find('li').each(function() {
                        var compare = this.innerHTML;
                        if(unique[compare])
                            $(this).hide();
                        else
                            unique[compare] = true;
                    });
                }
            }

            calcSlider();
            $(window).resize($.debounce(function() {
                calcSlider();
            }, 70, true));
        });
    };
})(jQuery);