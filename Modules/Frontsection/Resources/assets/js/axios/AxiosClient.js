import axios from 'axios'
// fetach bearer token from headerModule

export default {

    getClientWithInterceptor(baseUrl = null){
        const options = {
            baseURL: baseUrl
        };
        /*
        if (store.getters['users/isAuthenticated']) {
            options.headers = {
                Authorization: `Bearer ${store.getters['users/accessToken']}`,
            };
        }

         */

        const client = axios.create(options);

        // Add a request interceptor
        client.interceptors.request.use(
            requestConfig => requestConfig,
            (requestError) => {
                Raven.captureException(requestError);

                return Promise.reject(requestError);
            },
        );

        // Add a response interceptor
        client.interceptors.response.use(
            response => response,
            (error) => {
                if (error.response.status >= 500) {
                    Raven.captureException(error);
                }

                return Promise.reject(error);
            },
        );

        return client;
    },
    getClient(baseUrl = null){
        const options = {
            baseURL: baseUrl,
            headers: {
                // Authorization: 'Bearer {token}'
                //    'Access-Control-Allow-Credentials':true,
                //    'Access-Control-Allow-Headers': 'Origin, Content-Type, X-Auth-Token',
                'X-Requested-With' : 'XMLHttpRequest',
                //    'crossDomain': true,
                //    'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                //    'Access-Control-Allow-Methods': 'POST, GET, OPTIONS, PATCH, PUT',
                //    'enablePreflight': true,
                //    'useCredentails': true

            },
            timeout: 5000,
        };

        const client = axios.create(options);

        return client;
    }
}


/*
export const getClientC = (baseUrl=null) => {

    const optionsDefault = {
        baseURL: baseUrl
    };

    if (store.getters['users/isAuthenticated']) {
        options.headers = {
            Authorization: `Bearer ${store.getters['users/accessToken']}`,
        };
    }

    const client = axios.create(optionsDefault);

    // Add a request interceptor
    client.interceptors.request.use(
        requestConfig => requestConfig,
        (requestError) => {
            Raven.captureException(requestError);

            return Promise.reject(requestError);
        },
    );

    // Add a response interceptor
    client.interceptors.response.use(
        response => response,
        (error) => {
            if (error.response.status >= 500) {
                Raven.captureException(error);
            }

            return Promise.reject(error);
        },
    );

    return client;
}
*/
