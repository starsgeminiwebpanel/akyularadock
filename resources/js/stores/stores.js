import Vue from 'vue'
import Vuex from 'vuex'

import { states } from './states/states'
import * as actions from './actions/actions'
import * as mutations from './mutations/mutations'
import * as getters from './getters/getters'

const mainStore = {
    namespaced: true,
    state: {...states},
    getters: {...getters},
    mutations: {...mutations},
    actions: {...actions}
}

Vue.use(Vuex)


const store = new Vuex.Store({
    modules: {
        mainStore : mainStore,
    }
})

export default store;
