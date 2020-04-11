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

Route::apiResources([
    'user' => 'API\UserController',
]);
Route::get('profile','API\UserController@profile');
Route::patch('profile','API\UserController@profileUpdate');
Route::get('finduser','API\UserController@searchuser');//搜索用户
Route::get('note','API\FileController@index');//读取文件
Route::post('putnote','API\FileController@putnote');//写入文件
Route::post('loadimgs','API\FileController@loadimgs');//上传图片
Route::get('dict','API\DictController@search');//查询词典