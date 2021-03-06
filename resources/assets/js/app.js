require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import Vuex from 'vuex'
import store from './store/index'
import * as Cookies from 'js-cookie'
import Vuebar from 'vuebar';
import VueProgressBar from 'vue-progressbar'
import Echo from 'laravel-echo'
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

    window.Echo = new Echo({
        broadcaster: 'socket.io',
        host: window.location.hostname + ':6001',
        auth: {
            headers: {
                Authorization: store.state.user.token.token_type + " " + store.state.user.token.access_token
            }
        }
    });

}
const App = () =>
    import('./views/App.vue');
const Home = () =>
    import('./views/Home.vue');
const Registration = () =>
    import('./views/Registration.vue');
const NewRegistration = () =>
    import('./views/NewRegistration.vue');
const Login = () =>
    import('./views/Login.vue');
const IndexPage = () =>
    import('./views/IndexPage.vue');
const Feed = () =>
    import('./views/Feed.vue');
const AddCompany = () =>
    import('./views/AddCompany.vue');
const Dashboard = () =>
    import('./views/Dashboard.vue');
const VerifyEmail = () =>
    import('./views/VerifyEmail.vue');
const CompanyStructure = () =>
    import('./views/CompanyStructure.vue');
const Communication = () =>
    import('./views/Communication.vue');
const Platform = () =>
    import('./views/Platform.vue');
const UserSettings = () =>
    import('./views/UserSettings.vue');
const Chat = () =>
    import('./views/Chat.vue');
const ChatStartPage = () =>
    import('./views/ChatStartPage.vue');
const EmployeesPage = () =>
    import('./views/pages/company/employees/EmployeesPage.vue');
const SettingsPage = () =>
    import('./views/pages/company/settings/SettingsPage.vue');
const LaborCostsPage = () =>
    import('./views/pages/company/laborCosts/LaborCostsPage.vue');
const CatalogPage = () =>
    import('./views/pages/company/catalog/CatalogPage.vue');

const AddChat = () =>
    import('./views/AddChat.vue');

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'IndexPage',
            component: IndexPage
        },
        {
            path: "/registration",
            name: "registration",
            component: NewRegistration,
        },
        {
            path: "/login",
            name: "login",
            component: Login,
        },
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
                    axios.get("/api/auth/company/" + store.state.user.user.id).then(function (resp) {
                        store.state.user.company = resp.data
                    });
                    next();
                }).catch(error => {
                    router.push("/login");
                })
            },
            children: [{
                    path: "",
                    component: Dashboard,
                    name: "app",
                },
                {
                    path: "/user/settings",
                    component: UserSettings,
                    name: "user-settings",
                },
                {
                    path: 'company/:slug/structure',
                    name: "company-structure",
                    component: CompanyStructure,
                }, {
                    path: 'company/:slug/employees',
                    name: "company-employees",
                    component: EmployeesPage,
                },
                {
                    path: 'company/:slug/settings',
                    name: "company-settings",
                    component: SettingsPage,
                }, {
                    path: 'company/:slug/labor',
                    name: "company-labor",
                    component: LaborCostsPage,
                },
                {
                    path: 'company/:slug/catalog',
                    name: "company-catalog",
                    component: CatalogPage,
                },
                {
                    path: 'verifyemail/:token',
                    name: "verifyemail",
                    component: VerifyEmail,
                },
                {
                    path: "add_company",
                    component: AddCompany,
                    name: "add_company",
                },
                {
                    path: "news",
                    component: Feed,
                    name: "news",
                },
                {
                    path: "communication",
                    component: Communication,
                    children: [{
                        path: "",
                        component: ChatStartPage,
                        name: "communication",
                    }, {
                        path: "create_chat",
                        component: AddChat,
                        name: "add_chat",
                    }, {
                        path: ":chatid",
                        component: Chat,
                        name: "chat",
                    }]
                },
                {
                    path: "platform",
                    component: Platform,
                    name: "platform",
                }
            ]
        },
        {
            path: '*',
            redirect: '/'
        }
    ],
});
router.beforeEach((to, from, next) => {
    console.log("i see u")
    next();
})
const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});
