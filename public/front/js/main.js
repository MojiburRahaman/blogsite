/*

[Main Script]

Project     : BloggyPress - Responsive Personal Blog HTML5 Template
Version     : 1.0
Author      : ThemeLooks
Author URI  : https://themeforest.net/user/themelooks

*/

(function ($) {
    "use strict";
    
    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window),
        $document = $(document),
        $body = $('body');
    
    /* ------------------------------------------------------------------------- *
     * CHECK DATA
     * ------------------------------------------------------------------------- */
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };

    $(function () {
        /* ------------------------------------------------------------------------- *
         * BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var $bgImg = $('[data-bg-img]');

        $bgImg.css('background-image', function () {
            return 'url("' + $(this).data('bg-img') + '")';
        }).addClass('bg--img').removeAttr('data-bg-img').attr('data-rjs', 2);

        /* ------------------------------------------------------------------------- *
         * RETINAJS
         * ------------------------------------------------------------------------- */
        $('img').attr('data-rjs', 2);

        retinajs();
        
        /* ------------------------------------------------------------------------- *
         * FORM VALIDATION
         * ------------------------------------------------------------------------- */
        var $formValidation = $('[data-form="validate"]');
        
        $formValidation.each(function () {
            var $t = $(this);
            
            $t.validate({
                errorPlacement: function () {
                    return true;
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * AJAX FORM
         * ------------------------------------------------------------------------- */
        var $ajaxForm = $('[data-form="ajax"]');
        
        $ajaxForm.each(function () {
            var $form = $(this),
                $formStatus = $form.find('.status');
            
            $form.validate({
                errorPlacement: function () {
                    return true;
                },
                submitHandler: function (el) {
                    var $form = $(el),
                        formUrl = $form.attr('action'),
                        formData = $form.serialize();

                    $.post(formUrl, formData, function (res) {
                        $formStatus.show().html(res).delay(6000).fadeOut('show');
                    });
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * POPUP
         * ------------------------------------------------------------------------- */
        var $galleryPopup = $('[data-trigger="gallery_popup"]');

        $galleryPopup.each(function () {
            var $t = $(this);

            $t.magnificPopup({
                delegate: 'a',
                type: 'image',
                mainClass: 'mfp-no-margins mfp-with-zoom',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * OWL CAROUSEL
         * ------------------------------------------------------------------------- */
        var $owlCarousel = $('.owl-carousel');
        
        $owlCarousel.each(function () {
            var $t = $(this);
            
            $t.owlCarousel({
                items: checkData( $t.data('owl-items'), 1 ),
                margin: checkData( $t.data('owl-margin'), 0 ),
                loop: checkData( $t.data('owl-loop'), true ),
                smartSpeed: 2500,
                autoplay: checkData( $t.data('owl-autoplay'), true ),
                autoplayTimeout: checkData( $t.data('owl-speed'), 8000 ),
                center: checkData( $t.data('owl-center'), false ),
                animateOut: checkData( $t.data('owl-animate'), false ),
                nav: checkData( $t.data('owl-nav'), false ),
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                dots: checkData( $t.data('owl-dots'), false ),
                responsive: checkData( $t.data('owl-responsive'), {} )
            });
        });

        /* ------------------------------------------------------------------------- *
         * MAP
         * ------------------------------------------------------------------------- */
        var $map = $('[data-trigger="map"]'),
            $mapOps;

        if ( $map.length ) {
            // Map Options
            $mapOps = $map.data('map-options');

            // Map Initialization
            window.initMap = function () {
                $map.css('min-height', '400px');

                $map.each(function () {
                    var $t = $(this), map, lat, lng, zoom;

                    $mapOps = $t.data('map-options');
                    lat = parseFloat($mapOps.latitude, 10);
                    lng = parseFloat($mapOps.longitude, 10);
                    zoom = parseFloat($mapOps.zoom, 10);

                    map = new google.maps.Map($t[0], {
                        center: {lat: lat, lng: lng},
                        zoom: zoom,
                        scrollwheel: false,
                        disableDefaultUI: true,
                        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}],
                        zoomControl: true
                    });

                    new google.maps.Marker({
                        position: {lat: lat, lng: lng},
                        map: map,
                        animation: google.maps.Animation.DROP,
                        draggable: true
                    });
                });
            };

            // Map Script
            var googleAPI = document.createElement('script');

            googleAPI.type = 'text/javascript';
            googleAPI.src = 'https://maps.googleapis.com/maps/api/js?key='+ $mapOps.api_key +'&callback=initMap';

            $body.append( googleAPI );
        }

        /* ------------------------------------------------------------------------- *
         * BACK TO TOP BUTTON
         * ------------------------------------------------------------------------- */
        var $backToTopBtn = $('.back-to-top-btn');

        $backToTopBtn.on('click', 'a', function (e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 1200);
        });
    });
    
    $wn.on('load', function () {
        /* ------------------------------------------------------------------------- *
         * Masonry
         * ------------------------------------------------------------------------- */
        var $masonry = $('[data-trigger="masonry"]');
        
        if ( $masonry.length ) {
            $masonry.isotope();
        }

        /* ------------------------------------------------------------------------- *
         * FITROW
         * ------------------------------------------------------------------------- */
        var $fitRow = $('[data-trigger="fitrow"]');
        
        if ( $fitRow.length ) {
            $fitRow.isotope({
                layoutMode: 'fitRows'
            });
        }

        /* ------------------------------------------------------------------------- *
         * PRELOADER
         * ------------------------------------------------------------------------- */
        var $preloader = $('#preloader');

        if ( $preloader.length ) {
            $preloader.fadeOut('slow');
        }
    });

	/* ------------------------------------------------------------------------- *
	 * FOOTER REVEAL
	 * ------------------------------------------------------------------------- */
	var $footerReveal = $('[data-trigger="footer-reveal"]');

	if ( $footerReveal.length ) {
		$footerReveal.footerReveal({
			shadow: false
		});
	}

})(jQuery);