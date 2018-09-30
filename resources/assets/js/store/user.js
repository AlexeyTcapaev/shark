import * as Cookies from 'js-cookie'
export default {
    namespaced: true,
    state: {
        token: Cookies.getJSON('token') || undefined,
        user: Cookies.getJSON('user') || undefined,
        company: undefined
    },
    getters: {
        GetUserId(state) {
            return state.user.id;
        },
        GetUser(state) {
            return state.user;
        },
        GetCompany(state) {
            return state.company;
        },
        GetCompanyBySlug: state => slug => {
            if (state.company != undefined)
                return state.company.find(comp => {
                    if (comp.slug === slug) {
                        return comp;
                    }
                })
        }
    },
    mutations: {
        SetToken(state, input_data) {
            state.token = input_data
            axios.defaults.headers.common['Authorization'] = state.token.token_type + " " + state.token.access_token
            Cookies.set('token', JSON.stringify(state.token), {
                expires: 2,
                domain: location.hostname
            });
        },
        SetUser(state, input_data) {
            state.user = input_data
            Cookies.set('user', JSON.stringify(state.user), {
                expires: 2,
                domain: location.hostname
            });
        },
        ResetState(state) {
            state.token = {}
            state.user = {}
            axios.defaults.headers.common['Authorization'] = null
            Cookies.remove('user');
            Cookies.remove('token');
        },
        AddCompany(state, data) {
            state.company.push(data)
        }
    },
    actions: {
        SetToken(state, input_data) {
            state.commit('SetToken', input_data)
        },
        SetUser(state, input_data) {
            state.commit('SetUser', input_data)
        },
        ResetState(state) {
            state.commit('ResetState')
        },
        AddCompany(state, data) {
            state.commit('AddCompany', data)
        }
    },
}
