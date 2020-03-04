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

Route::POST('/login_post', 'AuthController@doLogin')->name('login_execute');
Route::GET('/login', 'PagesController@LoginView')->name('login_show');
Route::get('/logout', 'AuthController@Logout')->name('logout');

Route::GET('/', 'PagesController@index')->name('index');
Route::GET('/marketplace', 'PagesController@marketplace')->name('marketplace');
Route::GET('/inventory', 'PagesController@inventory')->name('inventory');
Route::GET('/stats', 'PagesController@stats')->name('stats');
Route::POST('/stats', 'UserController@save_stats')->name('post_stats');

Route::GET('/item/buy/{id}', 'UserItemController@buy')->name('buy-item');

Route::POST('/item/equip', 'UserItemController@equip')->name('equip-item');

Route::GET('/item/unequip', 'UserItemController@unequip')->name('unequip-item');
