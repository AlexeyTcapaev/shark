/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import Vuex from 'vuex'
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import VueProgressBar from 'vue-progressbar'
import Meta from 'vue-meta'
import VeeValidate from 'vee-validate'
import store from './store/index'
import Axios from 'axios';
import * as Cookies from 'js-cookie'
Vue.use(VueRouter)
Vue.use(Vuex)
Vue.use(Meta)
Vue.use(Vuetify, {
    theme: {
        primary: "#46547d",
    }
})
const options = {
    color: '#ffaf60',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
        speed: '0.4s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
}
Vue.use(VueProgressBar, options)
Vue.use(VeeValidate);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
if (store.state.user) {
    axios.defaults.headers.common['Authorization'] = store.state.user.token.token_type + " " + store.state.user.token.access_token
}
const App = () =>
    import ('./components/App.vue');
const Registration = () =>
    import ('./components/Registration.vue');
const Login = () =>
    import ('./components/Login.vue');
const Home = () =>
    import ('./components/Home.vue');
const IndexPage = () =>
    import ('./components/IndexPage.vue');
const routes = [{
        path: "/registration",
        name: "registration",
        component: Registration,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/app",
        name: "app",
        component: Home,
        beforeEnter: (to, from, next) => {
            axios.get('/api/auth/user').then(function (resp) {
                store.state.user = resp.data
                Cookies.set('user', JSON.stringify(store.state.user), {
                    expires: 2,
                    domain: location.hostname
                });
            })
            next();
        }

    },
    {
        path: "/",
        name: "IndexPage",
        component: IndexPage,
    },
]
export const router = new VueRouter({
    routes,
    mode: "history"
});
const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});