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

Route::get('mdshome', function(){
    return View::make('mdshome')->with('number_of_questions', 10000);
});

Route::get('aboutpamela', function(){
    return View::make('aboutpamela');
});
Route::get('mds', function(){
    return View::make('mds');
});

Route::resource('wpposts','WppostsController');