<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function princesaIndex()
    {
        $featuredFilms = [
            ['title' => 'Titanic', 'genre' => 'Romance', 'rating' => '7.9'],
            ['title' => 'The Conjuring', 'genre' => 'Horror', 'rating' => '7.5'],
            ['title' => 'Avengers: Endgame', 'genre' => 'Action', 'rating' => '8.4'],
            ['title' => 'La La Land', 'genre' => 'Musical', 'rating' => '8.0'],
            ['title' => 'Coco', 'genre' => 'Animation', 'rating' => '8.4'],
        ];

        return view('princesa_movies', compact('featuredFilms'));
    }
}