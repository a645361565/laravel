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

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //首页展示
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
    //登录
    Route::get('login','AdminController@login');
    Route::post('login_check','AdminController@login_check');
    //退出
    Route::get('logout','AdminController@logout');
});
