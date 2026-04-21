<?php

use App\Http\Controllers\FakultasController; // Add this import
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Fakultas', FakultasController::class);
