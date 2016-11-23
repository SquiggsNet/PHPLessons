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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pages', 'PagesController');

Route::resource('areas', 'AreasController');

Route::resource('styleTemplates', 'StyleTemplateController');

Route::resource('articles', 'ArticlesController');

Route::auth();

Route::get('/home', 'HomeController@index');
