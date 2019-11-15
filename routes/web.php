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
Route::get('/area', 'PagesController@index');
Route::get('/area/search', 'PagesController@search')->name('pages.search');
Route::post('/area/comments', 'CommentController@store')->name('comments.store')->middleware('auth');
