require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import User from './components/User.vue'
import Home from './components/Home.vue'
import App from './App.vue'

Vue.use(VueRouter)
const routes = [{
        path: '/',
        component: Home,
    },
    {
        path: '/user',
        component: User
    }
]
const router = new VueRouter({
    routes
})
new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
