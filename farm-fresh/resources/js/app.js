require('./bootstrap');
import $ from 'jquery';
import jQuery from 'jquery';
import './main.js';
import 'select2';
import { createApp } from 'vue';
import MultiImage from './components/multi-image.vue';
import './user-addresses.js';
import './profile-user-addresses.js';
// window.jQuery = window.$ = $;
window.$ = window.jQuery = require('jquery');
import 'flexslider';
import 'owl.carousel';
import 'jquery-bar-rating'

/** Multi Image vue component */
if ($("#multi-image").length) {
    const multi_image = createApp({})
    multi_image.component('multi-image', MultiImage)
    multi_image.mount('#multi-image');
}

// lightbox for showing product images on detail page
$(document).ready(function () {
    if ($("#product-gallery").length) {
        // $('#product-gallery').flexslider({
        //     animation: "slide",
        //     controlNav: "thumbnails",
        //     maxItems:4
        // });

        $('#gallery').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            touch: true,
            directionNav: false,
            sync: "#gallery-slides"
        });
        $('#gallery-slides').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            touch: true,
            itemWidth: 100,
            directionNav: false,
            itemMargin: 5,
            asNavFor: '#gallery'
        });
    }

    // if ($("#featured-slider").length) {
    //     $('#featured-slider').owlCarousel()({
    //     });
    // }
});

// Showing slider for featured products
$(document).ready(function () {
    (function ($) {
        $('#featured-slider').owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            loop: true,
            nav: false,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                767: {
                    items: 2
                },
                768: {
                    items: 4
                }
            }
        });

        $('#rating-bar').barrating({
            theme: 'fontawesome-stars'
        });

        $('.rating-static').barrating({
            theme: 'fontawesome-stars',
            readonly: true
        });
    })(jQuery);
});