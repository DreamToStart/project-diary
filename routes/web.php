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

Route::group(['middleware'=>['web']], function(){

	Route::get('/', function () {
    return view('home');
});
	Route::get('/regpage', [
		'uses' => 'RegisterController@getRegister',
		'as' => 'regpage']);
	/*Route::get('/loginpage', [
		'uses' => 'RegisterController@getLogin',
		'as' => 'loginpage']);*/


Route::post('/registration', [
	'uses' => 'RegisterController@registration',
	'as' => 'registration'
	]);


Route::post('/login', [
	'uses' => 'RegisterController@login',
	'as' => 'login'
	]);

Route::get('/profile', [
		'uses' => 'RegisterController@getProfile',
		'as' => 'profile',
		'middleware' => 'auth'
		]);

Route::get('/home', [
		'uses' => 'RegisterController@getHome',
		'as' => 'home']);

Route::get('/logout', [
		'uses' => 'RegisterController@logout',
		'as' => 'logout']);

});

