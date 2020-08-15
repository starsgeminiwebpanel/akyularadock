import router from './routes'
import axios from 'axios'

let isAuthenticated = false;

axios.get('/api/v1/isauth')
    .then((response)=>{
        if(response.data.isauth) isAuthenticated = true;
        console.log(response.data);
        console.log(response.data.isauth);
    })

router.beforeEach((to, from, next) => {
    if (to.name !== 'Login' && !isAuthenticated ) next({ name: 'Main' })
    else next()
})


console.log(isAuthenticated);

