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
// Route::get('mfiles','API\FileController@filenamesmodifier');//指定目录，批量修改文件名
Route::post('mfiles','API\FileController@filenamesmodifier');//指定目录，批量修改文件名
// Route::get('cpfiles','API\FileController@cpfiles');//指定目录，批量复制文件名到另一目录
Route::post('cpfiles','API\FileController@cpfiles');//指定目录，批量复制文件名到另一目录
Route::post('makefolders','API\FileController@makefolders');//指定目录，批量复制文件名到另一目录
// Route::get('removefolders','API\FileController@removefolders');//指定目录，批量复制文件名到另一目录
Route::post('removefolders','API\FileController@removefolders');//指定目录，批量复制文件名到另一目录



Route::get('dict','API\DictController@search');//查询词典
Route::post('dict','API\DictController@savearticle');//保存阅读
Route::get('articles','API\DictController@articlelist');//查询阅读
Route::apiResources([
    'tools' => 'API\ToolsController',
]);
Route::get('mv','API\MailVerifyController@index');//验证邮箱是否真实存在
