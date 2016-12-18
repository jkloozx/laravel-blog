<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['web'],'namespace' => 'Home'],function (){
    Route::get('/','IndexController@index') -> name('IndexController');
});

Route::group(['middleware' => ['web'],'except' => ['admin/login','admin/code'],'prefix' => 'admin','namespace' => 'Admin'], function () {
    Route::get('/','IndexController@index');
    Route::get('index','IndexController@index');
    Route::get('changePass','IndexController@changePass');
    Route::get('code','IndexController@code');
    Route::get('getCode','IndexController@getCode');
    Route::any('login','IndexController@login');
    Route::any('crypt','IndexController@crypt');
    Route::get('info','IndexController@info');
    Route::get('add','IndexController@add');
    Route::get('list','IndexController@list');
    Route::get('img','IndexController@img');
    Route::get('tab','IndexController@tab');
    Route::get('pass','IndexController@pass');
    Route::get('element','IndexController@element');

    Route::resource('article','ArticleController');
    Route::resource('category','CategoryController');
    Route::resource('config','ConfigController');
    Route::resource('links','LinksController');
    Route::resource('navs','NavsController');
});
//
//Route::group(['middleware' => ['web']],function (){
//    Route::get('test','TestController@test');
//});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



