<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);

// Custom routes must come BEFORE the resource route
Route::get('/books/spotlight', [BookController::class, 'spotlight'])
    ->name('books.spotlight');

Route::get('/books/genre/{category?}', [BookController::class, 'categoryFilter'])
    ->name('books.genre');

// Resource routes for the implemented actions only
Route::resource('books', BookController::class)
    ->only(['index', 'show'])
    ->names([
        'index' => 'books.catalog',
        'show' => 'books.details',
    ]);
