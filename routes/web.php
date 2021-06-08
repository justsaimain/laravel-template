<?php

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
