<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RatingController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [CategoryController::class, 'index'])->name('index');
Route::get('/show/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::post('/rate', [RatingController::class, 'store'])->name('rate');
