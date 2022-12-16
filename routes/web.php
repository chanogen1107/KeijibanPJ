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

//ログアウト中ページ
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('register', 'Auth\Register\RegisterController@register')->name('register');
Route::post('register', 'Auth\Register\RegisterController@register')->name('register');

Route::get('register-confirm', 'Auth\Register\RegisterConfirmController@confirm')->name('register-confirm');
Route::post('register-confirm', 'Auth\Register\RegisterConfirmController@confirm')->name('register-confirm');

Route::get('register-added', 'Auth\Register\RegisterAddedController@added')->name('register-added');
Route::post('register-added', 'Auth\Register\RegisterAddedController@added')->name('register-added');


//ログイン中ページ
Route::get('top', 'User\Post\PostsController@index')->name('top');
Route::post('top', 'User\Post\PostsController@index')->name('top');

Route::get('post', 'User\Post\PostsController@post')->name('post');
Route::post('post', 'User\Post\PostsController@post')->name('post');

Route::get('category', 'Admin\Post\PostsController@category')->name('category');
Route::post('category', 'Admin\Post\PostsController@category')->name('category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
