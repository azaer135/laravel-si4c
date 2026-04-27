<?php

use App\Http\Controllers\FakultasController; // Add this import
use App\Http\Controllers\PeriodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Fakultas', FakultasController::class);
Route::resource('/Fakultas', FakultasController::class);

Route::resource('/periode', PeriodeController::class);