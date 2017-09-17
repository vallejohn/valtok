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

Route::get('/', 'PagesController@about')->name('pages.about');
Route::get('/blog', 'PagesController@blogIndex')->name('pages.blogIndex');
Route::get('/blog/{slug}', 'PagesController@blogShow')->name('pages.blogShow');

Route::prefix('admin')->group(function (){
    Route::resource('posts', 'PostController');
});

Route::resource('categories', 'CategoryController');
