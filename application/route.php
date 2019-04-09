<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

Route::any('admin/login','admin/Login/Index',['method'=>'post|get']);
Route::get('admin/loginout','admin/Login/loginout');
Route::rule('captcha','admin/Login/captcha');
Route::rule('admin/Index','admin/Index/Index');
Route::rule('admin/welcome','admin/Index/welcome');
Route::Resource('admin/Link','admin/Link');
Route::Resource('admin/Article','admin/Article');
Route::Resource('admin/cat','admin/Category');
Route::get('admin/cat/del/[:id]','admin/Category/delete');
Route::Resource('admin/pic','admin/pic');
Route::Resource('admin/System','admin/System');
Route::post('admin/Upload','admin/Upload/UploadArt');
Route::post('admin/UploadPic','admin/Upload/UploadPic');


Route::get('/','index/index/index');
Route::get('list/cid/:cid','index/article/list');
Route::get('detail/aid/:aid','index/article/detail');
Route::post('comment','index/article/comment');
Route::post('search','index/Search/search');



Route::miss('/');
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
