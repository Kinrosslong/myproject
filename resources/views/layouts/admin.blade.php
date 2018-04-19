<!doctype html>
<!--vue 初始化页面布局 入口文件-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('home/i/favicon.png') }}">
        <!-- csrf-token 防止报错-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Kinross blog</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <!-- 在使用vue绑定数据的时候，渲染页面时会出现变量闪烁 -->
        <style>
            [v-cloak] {
                display: none;
            }
        </style>
    </head>
    <body>
        <!-- v-cloak 是vue不让浏览器看到渲染的vue.js的视图内容-->
        <div id="app" v-cloak>
           <my-app></my-app>
        </div>
        <!-- <script src="/js/app.js"></script> -->
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
