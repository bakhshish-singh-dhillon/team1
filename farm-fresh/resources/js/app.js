require('./bootstrap');
import $ from 'jquery';
import './main.js';
import 'select2';
import { createApp } from 'vue';
import MultiImage from './components/multi-image.vue';
import AdminCategoryModal from './components/admin-category-modal.vue';


/** Multi Image vue component */
if ($("#multi-image").length) {
    const multi_image = createApp({})
    multi_image.component('multi-image', MultiImage)
    multi_image.mount('#multi-image');
}