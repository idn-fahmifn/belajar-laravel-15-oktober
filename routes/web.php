<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function(){
    return "Welcome to kelas laravel";
});

Route::get('/halaman-laravel', function(){
    return view('first-page.first');
});



