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

/*
|--------------------------------------------------------------------------
| FrontEnd Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/', 'Frontend\FrontendController@index');

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('user/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');


/*
|--------------------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------------------
|
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);