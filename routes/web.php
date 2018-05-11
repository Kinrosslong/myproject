<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('admin', function () {
//     return view('layouts.admin');
// });

//去掉vue#号 匹配所有的字符串路由后台路由可以由后台写死配置
Route::any('{all}', function () {
    return view('layouts.admin'); //路由指向 vue布局文件
})->where(['all' => '.*']);

Route::get('/demo', 'DemoController@demo');

// Route::get('/demo', function () {
//     // return view('welcome');
//     echo 7908;
// });