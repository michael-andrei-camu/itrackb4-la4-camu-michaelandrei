<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function () {
    return 'Princesa E. Villanueva | 2023-72349 | BSIT 4C | ITRACKB4 Laravel 12';
});

Route::get('/movies', [MovieController::class, 'princesaIndex']);