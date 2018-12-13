

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
