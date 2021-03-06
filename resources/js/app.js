import Vue from 'vue'
import VueRouter from 'vue-router'
import VTooltip from 'v-tooltip'

Vue.use(VueRouter)
Vue.use(VTooltip)

import App from './components/App'
import Welcome from './components/Welcome'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },
    ]
});

const app = new Vue({
    el: '#app',
    components: { App },
    router
});