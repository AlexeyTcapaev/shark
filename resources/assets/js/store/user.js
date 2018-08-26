import * as Cookies from 'js-cookie'
export default {
    namespaced: true,
    state: {
        token: Cookies.getJSON('token') || {},
        user: Cookies.getJSON('user') || {}
    },
    mutations: {
        SetToken(state, input_data) {
            state = input_data
            Cookies.set('token', JSON.stringify(state), {
                expires: 2,
                domain: location.hostname
            });
        },
        SetUser(state, input_data) {
            state.user = input_data
            Cookies.set('user', JSON.stringify(state), {
                expires: 2,
                domain: location.hostname
            });
        }
    },
    actions: {
        SetToken(state, input_data) {
            state.commit('SetToken', input_data)
        },
        SetUser(state, input_data) {
            state.commit('SetUser', input_data)
        },
    },
}