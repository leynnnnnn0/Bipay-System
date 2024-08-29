import {createStore} from "vuex";

const createEmployeeStore = createStore({
    state(){
        return {
            count: 0
        }
    },
    mutations: {
        increment(state) {
            state.count++;
        }
    }
})

export default createEmployeeStore;
