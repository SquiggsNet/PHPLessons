<?php


Route::group(['middleware'=>'web'], function(){

    Route::get('begin', function(){

       return Redirect::to('/');
    });

    Route::get('/', function () {
        flash('You are now signed in!');
        //flash('You are now signed in!', 'alert-success');
        //flash('You are now signed in!', 'alert-danger');
        return view('welcome');
    });

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::resource('areas', 'AreasController');

    Route::resource('styleTemplates', 'StyleTemplateController');

    Route::resource('articles', 'ArticlesController');

    Route::resource('pages', 'PagesController');

});

