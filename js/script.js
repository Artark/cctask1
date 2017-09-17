/* <![CDATA[ */
(function ($) {
    "use strict";

    Drupal.behaviors.stickymenu = {
        attach: function(context, settings) {
            var stickySettings = {
                headerSticker: {
                    topSpacing: 0
                }
            };
            $('.header').sticky(stickySettings.headerSticker);
        }
    };

    Drupal.behaviors.togglemenu = {
        attach: function(context, settings) {
            $('#oc-menu-toggle').on('click', function(e) {
                e.preventDefault();
                $('#navigation').toggleClass('header__nav--toggled');
            });
        }
    };

    Drupal.behaviors.scrolltoanchor = {
        attach: function(context, settings) {
            $('.header .menu a[href*="#"]').click(function() {
                var headerHeight = $('.header').innerHeight();
                $('html, body').animate({
                    scrollTop: $('#' + $.attr(this, 'href').split('#')[1]).offset().top - headerHeight
                }, 500);
                return false;
            });
        }
    };

    Drupal.behaviors.slickcarousel = {
        attach: function(context, settings) {

            $('.oc-carousel-members .view-content').addClass('owl-carousel owl-theme').owlCarousel({
                loop:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:3,
                    },
                    568:{
                        items:3,
                    },
                    667:{
                        items:4,
                    },
                    768:{
                        items:5,
                    }
                }
            });

            $('.oc-carousel-blog .view-content').addClass('owl-carousel owl-theme').owlCarousel({
                margin:30,
                responsiveClass:true,
                nav: true,
                dots: false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive:{
                    0:{
                        items:1,
                        nav: false,
                        dots: true,
                    },
                    568:{
                        items:1,
                        nav: false,
                        dots: true,
                    },
                    667:{
                        items:2,
                        nav: false,
                        dots: true,
                    },
                    768:{
                        items:3,
                        nav: false,
                        dots: true,
                    },
                    960:{
                        items:4,
                        nav: true,
                        dots: false,
                    }
                }
            });
        }
    };

})(jQuery);
/* ]]> */