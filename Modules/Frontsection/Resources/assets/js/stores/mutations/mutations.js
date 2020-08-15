export const increment= (state) => {
    state.count++
}

export const incrementBy = (state,payload) => {
    state.count +=  payload.amount
    store.commit({
        type: 'increment',
        amount: 10
    })
}

export const getData = (state) => {
    return state;
}

export const getOtherData = (state) => state.todos
