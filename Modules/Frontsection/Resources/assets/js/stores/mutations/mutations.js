import mutationTypes from './mutation-types'
import { HTTP_API }  from '../../axios/baseaxios'
/*
export const mutationTypes.types.INCREMENT = state => state.count++
*/

export const getinfo = (state,rootState) => {

    console.log("entered")

    HTTP_API.get('https://api.coindesk.com/v1/bpi/currentprice.json').then(res => {
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
    HTTP_API.get('/users').then(res => {
      state.users = res
      console.log(res)
    }).catch(error => {
        if (error.response) {
            // The request was made and the server responded with a status code
            // that falls out of the range of 2xx
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
        } else if (error.request) {
            // The request was made but no response was received
            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
            // http.ClientRequest in node.js
            console.log(error.request);
        } else {
            // Something happened in setting up the request that triggered an Error
            console.log('Error', error.message);
        }
        console.log(error.config);
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
