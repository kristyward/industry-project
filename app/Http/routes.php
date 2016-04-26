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

Route::get('/', 'HomeController@index')->middleware('web');

Route::get('register', 'Auth\AuthController@getRegister')->middleware('web');
Route::post('register', 'Auth\AuthController@postRegister')->middleware('web');
Route::get('logout', 'Auth\AuthController@logout')->middleware('web');
Route::get('login', 'Auth\AuthController@getLogin')->middleware('web');
Route::post('login', 'Auth\AuthController@postLogin')->middleware('web');



Route::get('about', 'AboutController@index')->middleware('web');

Route::get('shop', 'ShopController@index')->middleware('web');
Route::get('custom', 'ShopController@custom')->middleware('web');

Route::get('print/{title}', 'PrintsController@show')->middleware(['web']);
Route::post('print/create', 'PrintsController@create')->middleware(['web', 'auth']);
// Route::get('print/{title}', 'PrintsController@store')->middleware(['web', 'auth']);

// Route::post('print/edit', 'PrintsController@edit')->middleware(['web', 'auth']);
// Route::put('print/update', 'PrintsController@update')->middleware(['web', 'auth']);
// Route::get('removeprint/{id}', 'PrintsController@remove')->middleware(['web', 'auth']);
// Route::delete('print/destroy', 'PrintsController@destroy')->middleware(['web', 'auth']);

Route::get('cart', 'ShopController@cart')->middleware('web');

Route::get('gallery', 'GalleryController@index')->middleware('web');

Route::get('stockists', 'InfoController@stockists')->middleware('web');
Route::get('shipping', 'InfoController@shipping')->middleware('web');
Route::get('tandc', 'InfoController@tandc')->middleware('web');

Route::get('contact', 'ContactController@index')->middleware('web');



Route::group(['middleware' => ['web']], function () {
	//
});
