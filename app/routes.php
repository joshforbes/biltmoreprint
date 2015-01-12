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


Route::get('/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/services/{slug}', function($slug) {
   return View::make('layouts.partials.services.' . $slug);
});

/*
 * Contact
 */
Route::post('contact', [
    'as'   => 'contact',
    'uses' => 'ContactController@store'
]);

/*
 * Sessions
 */
Route::get('logout', [
    'as'   => 'logout',
    'uses' => 'SessionsController@destroy'
]);


/*
 * Quotes
 */
Route::get('quotes/create', [
    'as'   => 'quotes.create',
    'uses' => 'QuotesController@create'
]);

Route::post('quotes', [
    'as'   => 'quotes.store',
    'uses' => 'QuotesController@store'
]);

/*
 * Uploads
 */
Route::get('uploads/create', [
    'as'   => 'uploads.create',
    'uses' => 'UploadsController@create'
]);

Route::post('uploads', [
    'as'   => 'uploads.store',
    'uses' => 'UploadsController@store'
]);

/*
 * Work
 */

Route::get('work', [
    'as'   => 'work.index',
    'uses' => 'WorkController@index'
]);

Route::get('work/{id}', [
    'as'   => 'work.show',
    'uses' => 'WorkController@show'
]);


/*
 * Admin Routes
 */
Route::group(['prefix' => 'admin', 'before' => 'auth.basic'], function() {

    // Admin home page
    Route::get('/', [
        'as'   => 'admin',
        'uses' => 'PagesController@admin'
    ]);

    // Quotes
    Route::get('quotes', [
        'as'   => 'quotes.index',
        'uses' => 'QuotesController@index'
    ]);

    Route::get('quotes/{id}', [
        'as'   => 'quotes.show',
        'uses' => 'QuotesController@show'
    ]);

    Route::get('quotes/destroy/{id}', [
        'as'   => 'quotes.destroy',
        'uses' => 'QuotesController@destroy'
    ]);

    // Uploads
    Route::get('uploads', [
        'as'   => 'uploads.index',
        'uses' => 'UploadsController@index'
    ]);

    Route::get('uploads/{id}', [
        'as'   => 'uploads.show',
        'uses' => 'UploadsController@show'
    ]);

    Route::get('uploads/destroy/{id}', [
        'as'   => 'uploads.destroy',
        'uses' => 'UploadsController@destroy'
    ]);

    //Work
    Route::get('work', [
        'as'   => 'work.admin.index',
        'uses' => 'WorkController@adminIndex'
    ]);

    Route::get('work/create', [
        'as'   => 'work.create',
        'uses' => 'WorkController@create'
    ]);

    Route::post('work', [
        'as'   => 'work.store',
        'uses' => 'WorkController@store'
    ]);

    Route::get('work/{id}', [
        'as'   => 'work.admin.show',
        'uses' => 'WorkController@adminShow'
    ]);

    Route::get('work/{id}/edit', [
        'as'   => 'work.edit',
        'uses' => 'WorkController@edit'
    ]);

    Route::put('work/{id}', [
        'as' => 'work.update',
        'uses' => 'WorkController@update'
    ]);

    Route::get('work/destroy/{id}', [
        'as'   => 'work.destroy',
        'uses' => 'WorkController@destroy'
    ]);


    // File Download
    Route::get('download/{clientFileId}', [
        'as'   => 'clientFiles.download',
        'uses' => 'ClientFilesController@download'
    ]);
});

