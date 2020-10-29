<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/* Auth::routes(); */

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/books/index', [HomeController::class, 'index'])->name('post.index');
Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
Route::post('/books/store', [BooksController::class, 'store'])->name('books.store');
Route::get('book/show/{book}',[BooksController::class, 'show'])->name('book.show');
Route::get('book/edit/{book}',[BooksController::class, 'edit'])->name('book.edit');
Route::put('book/update/{book}',[BooksController::class, 'update'])->name('book.update');
Route::delete('book/destroy/{book}',[BooksController::class, 'destroy'])->name('book.destroy');

