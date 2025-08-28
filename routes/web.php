<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RackController;

Route::get('/', function () {
    return view('welcome');
});

// CRUD untuk Buku
Route::resource('books', BookController::class);

// CRUD untuk Kategori
Route::resource('categories', CategoryController::class);

// CRUD untuk Rak
Route::resource('racks', RackController::class);
