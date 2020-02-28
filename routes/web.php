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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('admin');


Route::prefix('admin')->group(function(){
	Route::get('user.list','Admin\UserController@index');
	Route::get('product.list','Admin\ProductController@index');
	Route::get('product.add','Admin\ProductController@addProduct');
	Route::post('product.store','Admin\ProductController@storeProduct');
});
Route::get('user/dashboard','UserController@dashboard')->middleware('user');
//Route::get('user.list','Admin\UserController@index');
Route::get('article/list','ArticleController@list');
Route::get('article/add','ArticleController@add');
Route::post('article/store','ArticleController@store');
Route::get('article/show/{article}','ArticleController@show');