require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Actions from './components/Actions.vue'
import Add from './components/actionpages/Add.vue';
import Delete from './components/actionpages/Delete.vue';
import Edit from './components/actionpages/Edit.vue';
import Home from './components/Home.vue'
import statistics from './components/Statistics.vue'
import App from './App.vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)

Vue.use(IconsPlugin)

Vue.use(VueRouter)
const routes = [{
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/actions',
        name: "actions",
        component: Actions,
        children: [
            {
                path: '/actions/add',
                name: "add",
                component: Add
            },
            {
                path: '/actions/edit',
                name: "edit",
                component: Edit
            },
            {
                path: '/actions/delete',
                name: "del",
                component: Delete
            },
        ]
    },

    {
        path: '/statistics',
        name: "statistics",
        component: statistics
    }
]
const router = new VueRouter({
    routes
})
new Vue({
    router,
    render: h => h(App)
}).$mount('#app')
