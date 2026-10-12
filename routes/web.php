<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
    return 'Welcome to kelas laravel';
})->name('welcome.laravel');

Route::get('/halaman/{param?}', function ($nilai = 'laravel') {
    return 'Ini adalah halaman detail '.$nilai;
})->name('halaman.detail');

Route::prefix('kelas')->group(function () {
    Route::get('/halaman-laravel', function () {
        return view('first-page.first');
    })->name('halaman.laravel');

    Route::get('/halaman-ccna', function () {
        return view('first-page.second');
    })->name('halaman.ccna');
});
