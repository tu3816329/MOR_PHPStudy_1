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
use Illuminate\Http\Request;

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('news', 'NewsController@auth');
    // Route::resource('news', 'NewsController');
    Route::get('/login', 'LoginController@showLogin')->name('login');
    Route::post('/login', 'LoginController@doLogin');
    Route::post('/search', 'SearchController')->name('search');
    Route::get('/logout','LogoutController');
