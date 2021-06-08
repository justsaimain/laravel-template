<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/register', function () {
    return view('pages.auth.register');
});
