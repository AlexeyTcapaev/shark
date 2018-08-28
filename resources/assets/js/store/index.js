import Vue from "vue";
import Vuex from "vuex";
import user from "./user";
import config from './config'
Vue.use(Vuex);
export default new Vuex.Store({
    modules: {
        user,
        config
    }
});