<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function () {
    return 'Michael Andrei S. Camu | 2023-70935 | BSIT 4C | ITRACKB4 Laravel 12';
});

Route::get('/movies', [MovieController::class, 'index']);