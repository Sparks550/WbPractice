<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// 为get方法传递两个参数，一个指明url，第二个控制器动作
Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');// get页面读取，post数据提交
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('signup','usersController@create')->name('signup');
Route::resource('users','UsersController');

