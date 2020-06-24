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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catetreetest', 'CategoryController@index')->name('cate');//此路由如果放到单路由入口后面会被拦截
Route::post('/catetreetest', 'CategoryController@index')->name('cate');//此路由如果放到单路由入口后面会被拦截


Route::resource('/category', 'CategoryController');
// Route::get('{path}', 'HomeController@index')->where('path','.*?');
// ****单路由入口路由
Route::get('/{any}', 'HomeController@index')->where('any', '.*');//所有laravel路由将被转到单路由入口

// // 开启history模式，添加一条通配路由，当为404时，走此路由，可解决问题
// Route::get('{path?}', 'Home\HomeController@index')->where('path', '[\/\w\.-]*');

