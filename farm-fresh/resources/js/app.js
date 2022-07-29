require('./bootstrap');
import $ from 'jquery';
import jQuery from 'jquery';
import './main.js';
import 'select2';
import { createApp } from 'vue';
import MultiImage from './components/multi-image.vue';
import './user-addresses.js';
window.jQuery = window.$ = $;
import 'flexslider';

/** Multi Image vue component */
if ($("#multi-image").length) {
    const multi_image = createApp({})
    multi_image.component('multi-image', MultiImage)
    multi_image.mount('#multi-image');
}

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
            touch : true,
            sync: "#gallery-slides"
        });
        $('#gallery-slides').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            touch : true,
            itemWidth: 100,
            itemMargin: 5,
            asNavFor: '#gallery'
        });
    }
});