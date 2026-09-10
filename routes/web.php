<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'listAll']);

Route::get('/books', [BookController::class, 'listAll'])
    ->name('books.catalog');

Route::get('/books/spotlight', [BookController::class, 'spotlight'])
    ->name('books.spotlight');

Route::get('/books/genre/{category?}', [BookController::class, 'categoryFilter'])
    ->name('books.genre');

Route::get('/books/{id}', [BookController::class, 'viewBook'])
    ->name('books.details');

