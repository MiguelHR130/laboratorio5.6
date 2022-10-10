
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 import Vue from 'vue';

import {ClientTable, ServerTable, Event} from 'vue-tables-2';

import vSelect from './components/Herramientas/Select';
Vue.component('v-select', vSelect)
Vue.use(ClientTable);


Vue.component('categoria', require('./components/Categoria.vue'));
Vue.component('paciente', require('./components/Paciente.vue'));
Vue.component('subcategoria',require('./components/Subcategoria.vue'));
Vue.component('rol',require('./components/Rol.vue'));
Vue.component('user',require('./components/User.vue'));
Vue.component('solicitud',require('./components/Solicitud.vue'));
Vue.component('resultado',require('./components/Resultados.vue'));



const app = new Vue({
    el: '#app',
    data:{
        menu:0
    }
});
