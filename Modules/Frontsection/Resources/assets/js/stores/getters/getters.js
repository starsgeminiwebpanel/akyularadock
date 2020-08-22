import { HTTP }  from '../../axios/baseaxios'

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

export const saveUser = (state) => {
    HTTP.post('/users',state.user)
        .then(res => {
    state.saveUserResponse = res
    console.log(res)
    })
        .catch( err => { console.log(err)}).finally(res => {
        console.log("reached finally block!!!")
        //console.log(`Status: ${res.status}`)
        console.log(`Server: ${res.headers.server}`)
        console.log(`Date: ${res.headers.date}`)
    })
}


