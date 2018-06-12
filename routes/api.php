<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/posts', 'PostController@index'); //post请求
Route::get('/acticleInit', 'ArticleController@index'); //首页初始化get请求
Route::post('/acticleDel', 'ArticleController@articleDel'); //删除
Route::get('/acticleList', 'Admin\ArticleController@acticleList'); //前后分离测试数据