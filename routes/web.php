<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;


Route::get('/', function () {
    return view('welcome');
});

// create route /profile
Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/{book}', [BookController::class, 'update'])->name('books.update');
Route::post('books', [BookController::class, 'store'])->name('books.store');
Route::get('books/{book}',[BookController::class,'show'])->name('books.show');
Route::delete('books/{book}',[BookController::class,'destroy'])->name('books.destroy');
