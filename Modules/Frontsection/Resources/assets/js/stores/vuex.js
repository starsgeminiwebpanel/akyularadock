import Vue from 'vue'
import Vuex from 'vuex'
/*
import {state} from './states/states'
import * as actions from './actions/actions'
import * as mutations from './mutations/mutations'
import * as getters from './getters/getters'
*/
import frontDetails from './modules/frontdetails'
import frontMain from './modules/frontmain'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        frontDetails : frontDetails,
        frontMain : frontMain
    }
})

/*
const store = new Vuex.Store({
    state: {...state },
    actions: {
        ...actions,
    },
    mutations: {...mutations},
    getters: {...getters},

})
*/

/*
const store = new Vuex.Store({
    state: {
        count:0,
        todos: [
            { id: 1, text: 'todo 1', done: true },
            { id: 2, text: 'todo 2', done: false },
            { id: 3, text: 'todo 3', done: true }
        ]
    },
    getters: {
        doneTodos: state => {
            return state.todos.filter(todo => todo.done)
        },
        doneTodosCount: (state, getters) => {
            return getters.doneTodos.length
        },
        getTodoById: (state) => (id) => {
            return state.todos.find(todo => todo.id === id)
        }
    },

    mutations: {
        increment (state){
            state.count++
        },
        incrementBy(state,payload){
          state.count +=  payload.amount
        store.commit({
        type: 'increment',
        amount: 10
        })
        },
    },
    actions: {
        increment (context) {
            context.commit('increment')
        },
        incrementBy(context){
            context.commit('incrementBy')
        },
         async actionA ({ commit }) {
    commit('gotData', await getData())
  },
  async actionB ({ dispatch, commit }) {
    await dispatch('actionA') // wait for `actionA` to finish
    commit('gotOtherData', await getOtherData())
  }

    }

})
*/

export default store;
