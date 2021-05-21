(function ($) {
    "use strict";
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 200, 'easeInOutExpo');
        return false;
    });

    $(".about-btn").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#about-section").offset().top - 70
        }, 100);
    });
    
    
    // Dropdown on mouse hover
    // $(document).ready(function () {
    //     function toggleNavbarMethod() {
    //         if ($(window).width() > 992) {
    //             $('.navbar .dropdown').on('mouseover', function () {
    //                 $('.dropdown-toggle', this).trigger('click');
    //             }).on('mouseout', function () {
    //                 $('.dropdown-toggle', this).trigger('click').blur();
    //             });
    //         } else {
    //             $('.navbar .dropdown').off('mouseover').off('mouseout');
    //         }
    //     }
    //     toggleNavbarMethod();
    //     $(window).resize(toggleNavbarMethod);
    // });


    // Testimonials carousel
    // $(".testimonials-carousel").owlCarousel({
    //     autoplay: true,
    //     dots: true,
    //     loop: true,
    //     responsive: {
    //         0:{
    //             items:1
    //         },
    //         576:{
    //             items:1
    //         },
    //         768:{
    //             items:2
    //         },
    //         992:{
    //             items:3
    //         }
    //     }
    // });
    
    
    // Portfolio isotope and filter
    // var portfolioIsotope = $('.portfolio-container').isotope({
    //     itemSelector: '.portfolio-item',
    //     layoutMode: 'fitRows'
    // });

    // $('#portfolio-flters li').on('click', function () {
    //     $("#portfolio-flters li").removeClass('filter-active');
    //     $(this).addClass('filter-active');

    //     portfolioIsotope.isotope({filter: $(this).data('filter')});
    // });


    //**************************************************//
    //                      MAIN
    //**************************************************//
    

    $(document).ready(function () {
        // $('.testi-corosal').owlCarousel({
        //     autoplay: true,
        //     navigation : true, // Show next and prev buttons
        //     slideSpeed : 300,
        //     margin:100,
        //     paginationSpeed : 400,
        //     singleItem:true,
        //     items:1,
        //     dots: true,
     
        // });

        // var observer = new IntersectionObserver(function(entries) {
        //     // isIntersecting is true when element and viewport are overlapping
        //     // isIntersecting is false when element and viewport don't overlap
        //     if(entries[0].isIntersecting === true)

        //         console.log(entries);
        //         // alert('Element has just become visible in screen');
        //     // $(this).classList.add('animate__animated', 'animate__fadeInRight');
        // }, { threshold: [0] });

        // observer.observe(document.querySelector(".mk-right-in"));

        // // $('.mk-right-in').isvisible(function() {
        // //     $(this).classList.add('animate__animated', 'animate__fadeInRight');
        // // });


        function addAnimation() {
            // console.log('sss');
            // $('.mk-right-in').each(function(index, element) {
            //   var $currentElement = $(element);
            //     // animationType = $currentElement.attr('animation-type');

            //   if (onScreen($currentElement)) {
            //     // $currentElement.addClass('animated ' + animationType);
            //     if (!$currentElement.hasClass('animate__animated')) {
            //         $currentElement.addClass('animate__animated animate__fadeInRight');
            //     }
            //   }
            // });

            $.each([ 'rubberBand', 'fadeInUp', 'flipInX', 'fadeInRight' ], function( index, value ) {
              $('.ani-'+value).each(function(index, element) {
                  var $currentElement = $(element);
                    // animationType = $currentElement.attr('animation-type');

                  if (onScreen($currentElement)) {
                    // $currentElement.addClass('animated ' + animationType);
                    if (!$currentElement.hasClass('animate__animated')) {
                        $currentElement.addClass('animate__animated animate__'+value);
                    }
                  }
                });
            });
        }

        // takes jQuery(element) a.k.a. $('element')
        function onScreen(element) {
            // window bottom edge
            var windowBottomEdge = $(window).scrollTop() + $(window).height();

            // element top edge
            var elementTopEdge = element.offset().top;
            var offset = 100;


            console.log((elementTopEdge + offset)+' | '+windowBottomEdge+' | '+(elementTopEdge + offset <= windowBottomEdge));

            // if element is between window's top and bottom edges
            return elementTopEdge + offset <= windowBottomEdge;
        }

        $(window).on('load', function() {
            addAnimation();
        });

        $(window).on('scroll', function(e) {
            addAnimation();
        });


    });


})(jQuery);

