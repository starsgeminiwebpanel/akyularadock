/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//import router from './routes/routes';
import App from './components/App.vue'
import axios from 'axios';
//import VueRouter from 'vue-router';
//import VueMaterial from 'vue-material';
//import '../../node_modules/vue-material/dist/vue-material.min.css'
//import '../../node_modules/vue-material/dist/theme/default.css'
import router  from './routes/routes'
//import './routes/routerGuards'
import store from './stores/stores';
import 'es6-promise/auto';

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
// Install BootstrapVue
// Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
// Vue.use(IconsPlugin)
//import '../sass/custom.scss'

//ue.use(VueRouter)
//Vue.use(VueMaterial)
//Vue.use(axios)
window.axios = axios;
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('App', require('./components/App.vue').default);

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);


Vue.config.devtools = true;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const moduleVueFiles = require.context('../../Modules', true, /\.vue$/i);
moduleVueFiles.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], moduleVueFiles(key).default));


const app = new Vue({
    el: '#app',
    components: { App },
    store,
    router,
});

/*
const app  = new Vue({
  //  router,
    render: h => h(App)
}).$mount('#app')
*/
/*
const p = {
    "name" : "gemini",
    "email" : "artigeministars@gmail.com",
    "password" : "12345678",
    "password_confirmation" : "12345678",
};
*/
/*
axios.post('api/login' ,p,{})
    .then(response => {
        console.log(response.data.token);
    }).catch(error =>{ console.log(error)});
*/
