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

Route::get('/', function () {
    return view('welcome');
});
route::namespace('Backend')->prefix('admin')->group(function(){
    Route::get('/', 'Home@index')->name('admin.home');
    Route::resource('users', 'Users');
    Route::resource('category', 'Categories');
    Route::resource('skill', 'Skills');
    Route::resource('tag', 'Tags');
    Route::resource('page', 'Pages');
    Route::resource('video', 'Videos');
    Route::post('comment/store', 'Videos@storeComment')->name('storeComment');
    Route::post('comment/{id}', 'Videos@updateComment')->name('updateComment');
    Route::get('comment/{id}/delete', 'Videos@destroyComment')->name('destroyComment');

});
route::namespace('FrontEnd')->group(function(){
    Route::get('/', 'web@index')->name('welcome');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
