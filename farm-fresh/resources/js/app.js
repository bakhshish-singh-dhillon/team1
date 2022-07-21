require('./bootstrap');
import './main.js';
import 'select2';


/** Multi Image vue component */
import { createApp } from 'vue';
import MultiImage from './components/multi-image.vue';
const multi_image = createApp({})
multi_image.component('multi-image', MultiImage)
multi_image.mount('#multi-image');