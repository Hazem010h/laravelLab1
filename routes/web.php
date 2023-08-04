<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// make main page
Route::get('/add', function () {
    return view('add');
});

Route::get('/show', function () {
    $books = [
        ['title'=>'1984', 'price'=>50],
        ['title'=>'Laravel', 'price'=>100],
        ['title'=>'Vue', 'price'=>100]
    ];
    return view('show', ['books'=>$books]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
