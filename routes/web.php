<?php

use App\Http\Controllers\MainController;
//use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);

Route::get('/abot', [MainController::class, 'Abot']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/support', [MainController::class, 'support']);

Route::get('/review', [MainController::class, 'review'])->name('review');

Route::post('/review/check', [MainController::class, 'reviewCheck']);
