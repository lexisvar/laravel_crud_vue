
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var Vue = require('vue');
Vue.use(require('vue-resource'));

import Clientes from './components/Clientes.vue';

const app = new Vue({
    el: '#app',
    components: { Clientes }
});