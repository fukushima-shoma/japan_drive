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

Route::get('/sightseeing', 'PagesController@index')->name('pages.index');
Route::get('/show', 'PagesController@show')->name('pages.show');
Route::get('/area', 'pagesController@index');
Route::get('/area', 'PagesController@store')->name('pages.store');
Route::get('/area/search', 'pagesController@search')->name('pages.search');
