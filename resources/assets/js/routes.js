import VueRouter from 'vue-router'

let routes = [
    {
        path: '/admin/index',
        component: require('./components/pages/Home')
    },
    {
        path: '/admin/home',
        component: require('./components/pages/Home.vue')
    },
    {
        path: '/admin/about',
        component: require('./components/pages/About.vue')
    },
    // {
    //     path: '/demo',
    //     component: require('./components/pages/Demo')
    // },
    {
        path: '/post/:id',
        name: 'posts',
        component: require('./components/posts/Post.vue')
    },
    {
        path: '/admin/regist',
        name: 'regist',
        component: require('./components/register/Register.vue')
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

    { //阻止没有用的url地址 报错404 要一定放置最后
        path: "*",
        component: require('./components/pages/404.vue')
    },
    // { path: '*', redirect: './components/pages/404.vue', hidden: true },

]
export default new VueRouter({
    mode: 'history', //这里是去掉vue路由#号
    routes
})
