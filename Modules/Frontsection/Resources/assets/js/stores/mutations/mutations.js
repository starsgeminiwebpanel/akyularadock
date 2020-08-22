import mutationTypes from './mutation-types'
import { HTTP }  from '../../axios/baseaxios'
/*
export const mutationTypes.types.INCREMENT = state => state.count++
*/

export const getinfo = (state,rootState) => {

    console.log("entered")

    HTTP.get('https://api.coindesk.com/v1/bpi/currentprice.json').then(res => {
        state.info = res
        console.log(res)
    }).catch(error => {
        console.log(error)
        //this.errored = true
    }).finally(
        //    () => this.loading = false
    )
    /*
    return axios(url, {
        method: 'GET',
        mode: 'no-cors',
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
        },
        withCredentials: true,
        credentials: 'same-origin',
    }).then(response => {
    })
    */
}

export const getUsers = (state,rootState) => {
    HTTP.get('/users').then(res => {
      state.users = res
      console.log(res)
    }).catch(error => {
        console.log(error)
    }).finally(() => {
        console.log("reached finally block!!!")
    })
}

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

export const getInfo = (state) => {

}
