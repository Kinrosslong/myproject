
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueRouter from 'vue-router'
import router from './routes'
import ElementUI from 'element-ui'
// import 'element-ui/lib/theme-default/index.css  //这个应该是新版里面已经废弃
import 'element-ui/lib/theme-chalk/index.css'
//引入vue 表单验证插件
// import VeeValidate from 'vee-validate'
// import zh_CN from './locale/zh_CN'; //validate验证语言包
// import VeeValidate, { Validator } from 'vee-validate';

// Validator.localize('zh_CN', zh_CN);
Vue.use(VueRouter);
Vue.use(ElementUI);
// Vue.use(VeeValidate); // Install the Plugin. 引入验证插件

//引入APP 模块   使用组件 (Component)
Vue.component('my-app', require('./components/App.vue'));
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router
});

