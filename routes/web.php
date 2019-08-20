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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/login','Auth\LoginController@showLoginForm')->name('auth.login');
Route::put('admin/login', 'Auth\LoginController@doLogin');
Route::get('admin/logout', 'Auth\LoginController@logout');
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('dashboard', 'DashboardController@index');
	Route::get('user/list', 'UserController@list');
	Route::get('user/add', 'UserController@add');
    //Route::get('/', 'Auth\LoginController@showLoginForm');
  //  Route::post('admin/login', 'Auth\LoginController@doLogin');
    //Route::post('logout', 'Auth\LoginController@logout');
    
  //  Route::post('login','Auth/MakeloginController@login');
});
