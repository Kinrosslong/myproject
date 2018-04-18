import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        component: require('./components/pages/Home.vue')
    },
    // {
    //     path: '/about',
    //     component: require('./components/pages/About')
    // },
    // {
    //     path: '/demo',
    //     component: require('./components/pages/Demo')
    // },
    // {
    //     path: '/post/:id',
    //     name: 'posts',
    //     component: require('./components/posts/Post')
    // },
    // {
    //     path: '/regist',
    //     name: 'regist',
    //     component: require('./components/register/Register')
    // },
    // {
    //     path: '/email',
    //     name: 'email',
    //     component: require('./components/confirm/Email')
    // },
    // {
    //     path: '/login',
    //     name: 'login',
    //     component: require('./components/login/Login.vue')
    // },

]
export default new VueRouter({
    mode: 'history', //这里是去掉vue路由#号
    routes
})
