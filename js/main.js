(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {
        // magnificPopup
        $('.img-lightbox').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        
        // home-page Slider-area owlCarousel
        $('.home-page-sliders').owlCarousel({
            loop: true,
            margin: 30,
            items: 1,
            autoplay: false,
            touchDrag: false,
            mouseDrag: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        })
        
        // causes-list owlCarousel
        $('.causes-list').owlCarousel({
            loop: true,
            margin: 30,
            items: 2,
            autoplay: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
        
        // event-items owlCarousel
        $('.event-items').owlCarousel({
            loop: true,
            items: 2,
            margin: 30,
            autoplay: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                991: {
                    items: 2
                }
            }
        })
        
        // single-people-items owlCarousel
        $('.single-people-items').owlCarousel({
            loop: true,
            items: 3,
            margin: 30,
            autoplay: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })
        
        // gallery area isotope
        $('.gallery-option ul li').on('click', function () {
            $(".gallery-option ul li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".gallery-items").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
        $('#mainmenu').slicknav({
            allowParentLinks: true
        });
    });

    // jQuery(window) Function
    jQuery(window).on('load', function () {
        $(".gallery-items").isotope({
            itemSelector: '.gallery-items .col-sm-4',
            layoutMode: 'fitRows'
        });

    });


}(jQuery));