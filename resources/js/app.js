import './bootstrap';
import Vue from 'vue';
import CropGram from 'vue-cropgram';
Vue.component('crop-gram', CropGram);

window.onload = function () {
    var app = new Vue({
        el: '#app',
        components: {
            'crop-gram': CropGram,
        }
    });

    getCanvas();
}
