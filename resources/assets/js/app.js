require('./bootstrap');

import 'material-design-icons-iconfont/dist/material-design-icons.css'
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import Vuex from 'vuex'
import store from './store/index'
import * as Cookies from 'js-cookie'
import Vuebar from 'vuebar';
import VueProgressBar from 'vue-progressbar'
Vue.use(Vuebar);
Vue.use(Vuex)
Vue.use(Vuetify, {
    theme: {
        primary: "#46547d",
        secondary: "#f80b37"
    }
})
Vue.use(VueRouter)
Vue.use(VueProgressBar, {
    color: '#f80b37',
    failedColor: '#874b4b',
    thickness: '3px',
    transition: {
        speed: '0.4s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
})
if (store.state.user.token !== undefined) {
    axios.defaults.headers.common['Authorization'] = store.state.user.token.token_type + " " + store.state.user.token.access_token
}
const App = () =>
    import('./views/App.vue');
const Home = () =>
    import('./views/Home.vue');
const Registration = () =>
    import('./views/Registration.vue');
const Login = () =>
    import('./views/Login.vue');
const IndexPage = () =>
    import('./views/IndexPage.vue');
const Feed = () =>
    import('./views/Feed.vue');
const AddCompany = () =>
    import('./views/AddCompany.vue');
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: "/app",

            component: Home,
            beforeEnter: (to, from, next) => {
                axios.get('/api/auth/user').then(function (resp) {
                    store.state.user.user = resp.data
                    Cookies.set('user', JSON.stringify(store.state.user.user), {
                        expires: 2,
                        domain: location.hostname
                    });
                    next();
                }).catch(error => {
                    router.push("/login");
                })

            },
            children: [
                {
                    path: "",
                    component: Feed,
                    name: "app",
                },
                {
                    path: "add_company",
                    component: AddCompany,
                    name: "add_company",
                }
            ]
        },
        {
            path: '/',
            name: 'IndexPage',
            component: IndexPage
        },
        {
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
            path: '*',
            redirect: '/'
        }
    ],
});

const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});