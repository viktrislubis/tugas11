<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register Page']);
});

Route::get('/welcome', function () {
    return view('welcome');
});
