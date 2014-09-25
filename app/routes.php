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

Route::get('/', 'PagesController@home');

Route::get('/services/{slug}', function($slug) {
   return View::make('layouts.partials.services.' . $slug);
});

Route::resource('quotes', 'QuotesController');