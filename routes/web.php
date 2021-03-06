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

Route::group(['middleware'=>['web']], function (){

	Route::get('/', function () {
		return view('welcome');
	})->name('welcome');

	Route::post('/registration', [
		'uses' => 'UserController@postRegistration',
		'as' => 'registration'
	]);

	Route::post('/login', [
		'uses' => 'UserController@postLogin',
		'as' => 'login'
	]);

	Route::get('/logout', [
		'uses' => 'UserController@postLogout',
		'as' => 'logout'
	]);

	Route::get('/dashboard', [
		'uses' => 'UserController@getDashboard',
		'as' => 'dashboard',
		'middleware' => 'auth'
	]);

	Route::post('/createpost', [
		'uses' => 'PostController@postCreatePost',
		'as' => 'post.create'
	]);
});
