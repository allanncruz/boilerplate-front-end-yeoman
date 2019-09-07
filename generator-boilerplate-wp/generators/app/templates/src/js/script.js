

    $('.owl-carousel.owl-cards').owlCarousel({
        nav: true,
        loop: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        autoplay:true,
        autoplayTimeout:7000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-carousel.banner').owlCarousel({
        nav: true,
        loop: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        items:1,
        autoplay:true,
        autoplayTimeout:7000
    });

    $(".gallery-icon a").attr("rel", "galeria");
    $(".gallery-icon a").fancybox();

    //Fancybox from gallery Wordpress version 5

    $(".blocks-gallery-item figure a").attr("rel", "galeria");
    $(".blocks-gallery-item figure  a").fancybox();
