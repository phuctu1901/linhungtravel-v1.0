(counter = function () {

    $('#section-counter').waypoint(function (direction) {

        if (direction === 'down') {

            var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
            $('.number').each(function () {
                var $this = $(this),
                    num = $this.data('number');
                $this.animateNumber({
                    number: num,
                    numberStep: comma_separator_number_step
                }, 7000);
            });

        }

    }, {
        offset: '95%'
    });
    $('.owlcourse').each(function () {
        $(this).owlCarousel({
            loop: true,
            items: 3,
            margin: 30,
            responsiveClass: true,
            dots: true,
            nav: true,
            navText: ["", ""],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            rewindNav: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                },
                575: {
                    items: 3,
                    margin: 15,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 3,
                }
            }
        });
    });

    $('.recent-blogs').each(function () {
        $(this).owlCarousel({
            loop: true,
            items: 4,
            margin: 40,
            responsiveClass: true,
            dots: true,
            nav: true,
            navText: ["", ""],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            rewindNav: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                },
                575: {
                    items: 4,
                    margin: 15,
                },
                992: {
                    items: 4,
                },
                1200: {
                    items: 4,
                }
            }
        });
    });


})(jQuery);

counter();

