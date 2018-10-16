
export default {
    namespaced: true,
    state: {
        chats: [{
            users: null
        }],
    },
    getters: {
        GetChats(state) {
            return state.chats;
        },

        GetChatById: state => id => {
            return state.chats.find(chat => chat.id == id);
        }
    },
    mutations: {
        SetChats(state, input_data) {
            state.chats = input_data
        },

    },
    actions: {
        SetChats(state, input_data) {
            state.commit('SetChats', input_data)
        },

    },
}
