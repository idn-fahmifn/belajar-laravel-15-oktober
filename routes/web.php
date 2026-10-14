<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{KelasController, TrainingController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
    return 'Welcome to kelas laravel';
})->name('welcome.laravel');

Route::get("/course", [KelasController::class, 'course'])->name('listcourse');
Route::get("/course/{param}", [KelasController::class, 'detailCourse'])->name('detail.course');

Route::get('/halaman/{param?}', function ($nilai = 'laravel') {
    return 'Ini adalah halaman detail '.$nilai;
})->name('halaman.detail');

Route::prefix('kelas')->middleware('age')->group(function () {
    Route::get('/halaman-laravel', [KelasController::class, 'laravel'])->name('halaman.laravel');
    Route::get('/halaman-ccna', [KelasController::class, 'ccna'])->name('halaman.ccna');
    Route::resource('/training', TrainingController::class);
    Route::post('/kirim-training', [KelasController::class, 'kirim'])->name('kirim.kelas');

});
