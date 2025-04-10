<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cartera', function () {
    return view('cartera');
});


Route::resource('/services', ServiceController::class);
