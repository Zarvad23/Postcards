require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import store from './store/store';
import Vuex from "vuex";

Vue.use(VueRouter);
Vue.use(Vuex);



const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    store: new Vuex.Store(store),
    methods: {
        addPhoto(event) {
            console.log(event.target.file);
        }
    }
});
