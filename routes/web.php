<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/about', [AnggotaController::class, 'show']);

Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('anggota.store');
