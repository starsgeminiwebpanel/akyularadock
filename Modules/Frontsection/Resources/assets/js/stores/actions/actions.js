export const increment =  context => {
    context.commit('increment')
}

export const incrementBy = context => {
    context.commit('incrementBy')
}

export const calculate = ({ dispatch, commit, getters, rootGetters }) => {
    /*
    getters.someGetter // -> 'foo/someGetter'
    rootGetters.someGetter // -> 'someGetter'
    rootGetters['bar/someGetter'] // -> 'bar/someGetter'

    dispatch('someOtherAction') // -> 'foo/someOtherAction'
    dispatch('someOtherAction', null, { root: true }) // -> 'someOtherAction'

    commit('someMutation') // -> 'foo/someMutation'
    commit('someMutation', null, { root: true }) // -> 'someMutation'
    */
}



