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

// Route::get('{path}', 'HomeController@index')->where('path','.*?');

Route::get('/{any}', 'HomeController@index')->where('any', '.*');

// // 开启history模式，添加一条通配路由，当为404时，走此路由，可解决问题
// Route::get('{path?}', 'Home\HomeController@index')->where('path', '[\/\w\.-]*');