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
use Illuminate\Http\RedirectResponse;

Route::get('/', 'HomeController@index');
Route::resource('news', 'NewsController');
Route::get('/test', function (Request $request) {
    $uri = $request->path();
    if ($uri=='test') {
        echo $uri;
        return redirect('/');
    } else {
        echo "shorray";
    }
});
