import VueRouter from 'vue-router'

let routes = [
    {
        path: '/admin',
        component: require('./components/pages/Home')
    },
    {
        path: '/admin/home',
        component: require('./components/pages/Home.vue')
    },
    {
        path: '/admin/about',
        component: require('./components/pages/About')
    },
    // {
    //     path: '/demo',
    //     component: require('./components/pages/Demo')
    // },
    {
        path: '/post/:id',
        name: 'posts',
        component: require('./components/posts/Post')
    },
    {
        path: '/admin/regist',
        name: 'regist',
        component: require('./components/register/Register')
    },
    // {
    //     path: '/email',
    //     name: 'email',
    //     component: require('./components/confirm/Email')
    // },
    {
        path: '/admin/login',
        name: 'login',
        component: require('./components/login/Login.vue')
    },

]
export default new VueRouter({
    mode: 'history', //这里是去掉vue路由#号
    routes
})
