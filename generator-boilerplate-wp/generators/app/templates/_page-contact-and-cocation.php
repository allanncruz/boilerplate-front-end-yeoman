<?php get_header(); ?>

    <section class="internal-page">
        <div class="container featurette mt-5">

            <div class="box-container bg-white p-5 mb-5 shadow-sm">
                <div class="row">
                    <div class="col">
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                            <h1 class="display-4 text-center"><?php the_title(); ?></h1>
                            <div class="box-content p-4">

                                <div class="row">
                                    <div class="col-md-5">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="bg-light pt-3 px-5">
                                            <?php echo do_shortcode( '[contact-form-7 id="24" title="Contato e Localização"]' ); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="map"></div>
        <script>
            function initMap() {
                // Styles a map in night mode.
                var myStyles =[

                    {

                        featureType: "poi",

                        elementType: "labels",

                        stylers: [

                            { visibility: "off" }

                        ]

                    }

                ];
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -6.070564, lng: -35.338656},
                    zoom: 9,
                    styles: [   {        "featureType": "administrative",        "elementType": "labels.text.fill",        "stylers": [            {                "color": "#2e6052"            }        ]    },    {        "featureType": "landscape",        "elementType": "all",        "stylers": [            {                "color": "#f2f2f2"            }        ]    },    {        "featureType": "poi",        "elementType": "all",        "stylers": [            {                "visibility": "off"            }        ]    },    {        "featureType": "road",        "elementType": "all",        "stylers": [            {                "saturation": -100            },            {                "lightness": 45            }        ]    },    {        "featureType": "road.highway",        "elementType": "all",        "stylers": [            {                "visibility": "off"            }        ]    },    {        "featureType": "road.arterial",        "elementType": "labels.icon",        "stylers": [            {                "visibility": "off"            }        ]    },    {        "featureType": "transit",        "elementType": "all",        "stylers": [            {                "visibility": "off"            }        ]    },    {        "featureType": "water",        "elementType": "all",        "stylers": [            {                "color": "#a9d4e2"            },            {                "visibility": "on"            }        ]    } ],
                    scrollwheel: false
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-6.070564, -35.338656),
                    title: "Ponto mapa",
                    map: map,
                    icon: '<?php bloginfo("template_url") ?>/dist/img/uploads/maps.png'
                });
            }
            initMap();
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNj--p0jczavWMrCOqsw_GBNF29EH8MsQ&callback=initMap" async defer></script>

    </section>

<?php get_footer(); ?>