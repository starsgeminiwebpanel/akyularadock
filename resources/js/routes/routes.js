import Vue from 'vue';
import VueRouter from 'vue-router';
import Main from '../pages/Main.vue';

import FrontRouters from '../../../Modules/Frontsection/Resources/assets/js/routes/routes'

Vue.use(VueRouter);

const routes = [
  /*
    {
        path: '/templates',
        name: 'templates.index',
        component: require('./pages/Templates/Index')
    },
   */
    {
        path: '/hello',
        name: 'hello',
        component: require('../pages/Hello').default,
        meta: { requiresAuth: true }
    },
    {
        path: '/main',
        name: 'main',
        component: Main,
        meta: { requiresAuth: true }
    },
  /*
    {
        path: '/vuehome',
        name: 'vuehome',
        component: Home,
    },
*/
   // { path: '/404', name: '404', component: NotFound },
   // { path: '*', redirect: '/404' },
];

const router = new VueRouter({
    mode: 'history',
    routes : [
        ...routes,
        ...FrontRouters
    ],
    linkActiveClass: 'is-active'
});

export default router;
