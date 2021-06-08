<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
})->middleware('auth:web');

Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@getLogin')->name('login');
    Route::post('/login', 'LoginController@login');

    Route::get('/register', 'RegisterController@getRegister');
    Route::post('/register', 'RegisterController@register');

    Route::post('/logout', 'AuthController@logout')->name('logout');
});

Route::group(['namespace' => 'Admin\Auth', 'prefix' => 'admin'], function () {

    Route::get('/register', 'RegisterController@register');
    Route::post('/register', 'RegisterController@postRegister');

    Route::get('/login', 'LoginController@getLogin');
    Route::post('/login', 'LoginController@login');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'dashboard', 'middleware' => 'admin'], function () {

    Route::get('/', 'DashboardController@index');
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
