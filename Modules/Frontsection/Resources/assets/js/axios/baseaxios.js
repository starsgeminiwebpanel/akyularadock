import axios from 'axios';
import { EXTERNAL_API_URL , API_URL , BASE_URL } from '../common/config'

export const HTTP = axios.create({
    baseURL: API_URL,
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
})

//HTTP.defaults.headers.common['Authorization'] = AUTH_TOKEN;
HTTP.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
