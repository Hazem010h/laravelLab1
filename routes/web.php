<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\CreateBookRequest;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\CheckAge;


Route::get('/', function () {
    return view('welcome');
});

// create route /profile
Route::middleware(['auth','checkAge'])->group(function () {
    Route::resource('books', BookController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
