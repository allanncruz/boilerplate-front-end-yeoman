

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
        dots: true,
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

    jQuery("input.telefone")
        .mask("(99) 9999-99999")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-9999");  
            } else {  
                element.mask("(99) 9999-99999");  
            }  
        });