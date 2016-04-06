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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Controller@index');

Route::get('/user', function(){
    return view('welcome');
});

Route::get('/contact', function(){
    return view('pages/contact');
});


Route::get('about', 'PageController@about');

//Route::get('articles', 'ArticlesController@index');
//
//Route::get('articles/create', 'ArticlesController@create');
//
//Route::get('articles/{id}', 'ArticlesController@show');
//
//Route::post('articles', 'ArticlesController@store');

Route::resource('articles', 'ArticlesController');