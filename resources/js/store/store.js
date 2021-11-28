export default {
    state: {
        template: ''
    },
    getters: {
        GET_TEMPLATE: state =>{
            return state.template;
        }
    },
    mutations: {
        ADD_TEMPLATE(state, data) {
            state.template = data;
        }
    },
    actions: {
        ADD_TEMPLATE: async(context, data) => {
            await context.commit('ADD_TEMPLATE', data);
        },
    }
}