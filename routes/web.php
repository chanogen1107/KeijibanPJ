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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//ログアウト中ページ
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('register', 'Auth\RegisterController@show')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('register-confirm', 'Auth\RegisterConfirmController@confirm')->name('register-confirm');
Route::post('register-confirm', 'Auth\RegisterConfirmController@confirm')->name('register-confirm');

Route::get('register-added', 'Auth\RegisterAddedController@added')->name('register-added');
Route::post('register-added', 'Auth\RegisterAddedController@added')->name('register-added');


//ログイン中ページ
Route::group(['middleware' => ['auth']], function(){
Route::get('top', 'User\Post\PostsController@index');
Route::post('top', 'User\Post\PostsController@index');

Route::get('post', 'User\Post\PostsController@post')->name('post');
Route::post('post', 'User\Post\PostsController@post')->name('post');

Route::get('post_detail/{id}', 'User\Post\PostsController@post_detail')->name('post_detail');

Route::get('category', 'Admin\Post\PostsController@category')->name('category');
Route::post('category', 'Admin\Post\PostsController@category')->name('category');

Route::get('logout', 'Auth\LoginController@logout');
});
