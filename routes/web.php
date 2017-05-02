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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::get('/dashboard','Dashboard\DashboardController@index'); 
	Route::get('/logout','Dashboard\DashboardController@logout'); 
});
Route::group(['prefix' => 'admin'], function() { 
	Route::post('/client/login','ClientAuth\LoginController@clientLogin'); 	
}); 
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'FrontendPageController@index'); 
Route::get('/home', 'FrontendPageController@index'); 
Route::get('/about', 'FrontendPageController@about'); 
Route::get('/contact', 'FrontendPageController@contact'); 
Route::get('/events', 'FrontendPageController@events'); 
Route::get('/register-for-event', 'FrontendPageController@registerForEvent'); 
Route::get('/user/login', 'FrontendPageController@login'); 
Route::get('/signup', 'FrontendPageController@signup'); 

Auth::routes();

