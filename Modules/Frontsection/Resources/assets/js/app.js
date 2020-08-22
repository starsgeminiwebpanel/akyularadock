import Vue from 'vue';
import AppFSection from './components/AppFSection.vue'
import Header from './pages/Header.vue'
import Middle from './pages/Middle.vue'
import Footer from './pages/Footer.vue'
import axios from 'axios';
import baseAxios from './axios/baseaxios'
import VueRouter from 'vue-router'
import VueMaterial from 'vue-material';
import '../../../../../node_modules/vue-material/dist/vue-material.min.css'
import '../../../../../node_modules/vue-material/dist/theme/default.css'
import FrontRouters from "./routes/routes";

import store from './stores/vuex'
import 'es6-promise/auto';

Vue.use(VueMaterial)
Vue.use(VueRouter)
// Vue.use(axios)
/*
window.axios = axios;
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};
*/
 /*
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
        "Content-Type": "application/json",
        'Access-Control-Allow-Origin': '*',
}

 */
/*
window.axios.defaults.baseURL = 'https://pixabay.com';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers['crossDomain'] = true;
window.axios.defaults.headers['Access-Control-Allow-Origin'] = '*';

let csrf = document.querySelector('meta[name="csrf-token"]');
if (csrf) {
    window.token = csrf.getAttribute('content');
    window.axios.defaults.headers.common["X-CSRF-TOKEN"] = window.token;
} else {
    console.error("CSRF token not found!")
}
*/

/*
export default {
    name: 'frontsection',
    components: {
        App
    }
}

*/
const routerFront = new VueRouter({
    mode: 'history',
    routes : [
        ...FrontRouters
    ],
    linkActiveClass: 'is-active'
});


const frontsectionapp = new Vue ({
   el : '#frontsectionapp',
   components: {
       AppFSection,
       Middle,
       Header,
       Footer
   },
    router: routerFront,
    store,
});

