<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostController@index']);
Route::get('posts/{id}', 'PostController@view')->where('id', '[0-9]+');
Route::get('posts/create', 'PostController@create');
Route::post('posts/create', 'PostController@doCreate');
Route::get('posts/{id}/update', 'PostController@update')->where('id', '[0-9]+');
Route::post('posts/{id}/update', 'PostController@doUpdate')->where('id', '[0-9]+');
// Route::post('post/{id}/delete', 'PostController@doDelete')->where('id', '[0-9]+');
// Route::get('posts/create1', 'PostController@doCreate');
Route::get('posts/{id}/delete1', 'PostController@doDelete')->where('id', '[0-9]+');