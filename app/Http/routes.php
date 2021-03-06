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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::resource('/', 'PagesController');

Route::post('/module/save', 'PagesController@saveModule');

Route::get('/module/new', 'PagesController@newModule');

Route::get('/modules', 'PagesController@modules');

Route::get('/module/{id}', 'PagesController@module');

Route::post('/assignment/save', 'PagesController@saveAssignment');

Route::get('/assignment/new', 'PagesController@newAssignment');

Route::get('/assignments', 'PagesController@assignments');

Route::get('/assignment/{id}', 'PagesController@assignment');



