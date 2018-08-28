export default {
    namespaced: true,
    state: {
        windowWidth:document.documentElement.clientWidth,
        windowHeight:document.documentElement.clientHeight,
    },
    getters:{
        windowWidth: state => {
            return state.windowWidth
        },
        windowHeight: state => {
            return state.windowHeight
        }
    },
    mutations: {
        SetWindowWidth: (state,value) => {
            state.windowWidth = value
        },
        SetWindowHeight: (state,value) => {
            state.windowHeight = value
        }
    },
    actions:{
        SetWindowWidth:(state,value)=>{
            state.commit('SetWindowWidth', value)
        },
         SetWindowHeight:(state,value)=>{
            state.commit('SetWindowHeight', value)
        }

    }
}