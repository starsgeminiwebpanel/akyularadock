import {state} from '../states/states'
import * as actions from '../actions/actions'
import * as mutations from '../mutations/mutations'
import * as getters from '../getters/getters'

const frontMain = {
    namespaced: true,
    state: {...state},
    getters: {...getters},
    mutations: {...mutations},
    actions: {...actions}
}

export default  frontMain;
