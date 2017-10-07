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

Route::get('/', 'ArticleController@listarticles');
Route::resource('article','ArticleController');
Route::post('search', 'ArticleController@search');
Route::get('articles/pdf', 'ArticleController@pdf');
Route:: get('articles/excel' ,  'ArticleController@excel' );
//facebook socialite
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');



Route::resource('category','CategoryController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{locale}', function($locale){
	App::setLocale($locale);
	return view('auth.login');
});
