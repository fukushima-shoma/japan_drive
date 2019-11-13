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



Auth::routes();

Route::get('/', 'PagesController@getHome');
Route::get('/drive', 'PagesController@getDrive');
Route::get('/food', 'PagesController@getFood');
Route::get('/sightseeing', 'PagesController@getSightseeing');
Route::get('/area/{area_id}/{theme_id?}', 'PagesController@getSightseeing');
