export const doneTodos = state => {
    return state.todos.filter(todo => todo.done)
}

export const  doneTodosCount = (state, getters,rootState, rootGetters) => {
    return getters.doneTodos.length
   // getters.someOtherGetter // -> 'foo/someOtherGetter'
   // rootGetters.someOtherGetter // -> 'someOtherGetter'
   // rootGetters['bar/someOtherGetter'] // -> 'bar/someOtherGetter'
}

export const getTodoById =  (state) => (id) => {
    return state.todos.find(todo => todo.id === id)
}


