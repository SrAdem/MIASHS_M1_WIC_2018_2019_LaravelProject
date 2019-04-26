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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/contact', 'ContactController@index');
Route::get('contact','ContactController@create');
Route::post('contact','ContactController@store');
Route::get('/articles/{post_name}', 'ArticleController@show')->name('posts');
Route::get('articles/{post_name}','ArticleController@create');
Route::post('articles/{post_name}','ArticleController@store');