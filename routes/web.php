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

Route::POST('/login_post', 'AuthController@doLogin')->name('login_execute');
Route::GET('/login', 'PagesController@LoginView')->name('login_show');
Route::get('/logout', 'AuthController@Logout')->name('logout');

Route::GET('/marketplace', 'PagesController@marketplace')->name('marketplace');
