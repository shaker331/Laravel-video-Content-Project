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
    Route::get('videos/{id}', 'Home@destroy1')->name('video.destroy1');
    Route::resource('users', 'Users');
    Route::resource('category', 'Categories');
    Route::resource('skill', 'Skills');
    Route::resource('tag', 'Tags');
    Route::resource('page', 'Pages');
    Route::resource('video', 'Videos');
    Route::resource('message', 'Messages');
    Route::post('message/{id}/replay', 'Messages@replay')->name('replay');
    Route::post('comment/store', 'Videos@storeComment')->name('storeComment');
    Route::post('comment/{id}', 'Videos@updateComment')->name('updateComment');
    Route::get('comment/{id}/delete', 'Videos@destroyComment')->name('destroyComment');

});
route::namespace('FrontEnd')->group(function(){
    Route::get('/', 'web@index')->name('welcome');
    Route::get('/category/{id}/{slug}', 'web@showCategory')->name('showCategory');
    Route::get('/video/{id}/{slug}', 'web@showvideo')->name('showvideo');
    Route::get('/result', 'web@search')->name('search');
    Route::post('/comment/{id}/create', 'web@commentstore')->name('commentstore');
    Route::get('/contact', 'web@contact')->name('contact');
    Route::post('/contact/store', 'web@contactstore')->name('contact.store');
    Route::get('/privacy', 'web@privacy')->name('privacy');
    Route::get('/about', 'web@about')->name('about');
    Route::get('/profile/{id}/{slug}', 'web@profile')->name('profile');





});
Auth::routes();
// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

