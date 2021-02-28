
require('./bootstrap');
import Vue from 'vue';

window.Vue = require('vue');

import Router from 'vue-router'
import { BootstrapVue } from 'bootstrap-vue'




Vue.use(Router)
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin

const routes = [
    { 
     path: '/',
     name: 'product_list',
     component: require('./components/Product/ListComponent.vue')
    },
    { 
     path: '/product/add',
     name: 'product_add', 
     component: require('./components/Product/FormComponent.vue')
     },
    { 
     path: '/product/edit/:id',
     name: 'product_edit', 
     component: require('./components/Product/FormComponent.vue')
    },
    { 
     path: '/category',
     name: 'category_list',
     component: require('./components/Category/ListComponent.vue')
    },
    { 
     path: '/category/add',
     name: 'product_add', 
     component: require('./components/category/FormComponent.vue')
    },
    { 
     path: '/category/edit/:id',
     name: 'product_edit', 
     component: require('./components/category/FormComponent.vue')
    },
]

const router = new Router({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router
});