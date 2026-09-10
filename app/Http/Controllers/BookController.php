<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Mock dataset for books library
    private function fetchCatalog(): array
    {
        return [
            101 => ['id' => 101, 'title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'genre' => 'Fiction', 'price' => 14.99],
            102 => ['id' => 102, 'title' => '1984', 'author' => 'George Orwell', 'genre' => 'Dystopian', 'price' => 12.50],
            103 => ['id' => 103, 'title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'genre' => 'Fiction', 'price' => 10.99],
            104 => ['id' => 104, 'title' => 'Dune', 'author' => 'Frank Herbert', 'genre' => 'Sci-Fi', 'price' => 18.25],
            105 => ['id' => 105, 'title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'genre' => 'Fantasy', 'price' => 15.00],
            106 => ['id' => 106, 'title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury', 'genre' => 'Dystopian', 'price' => 11.75],
        ];
    }

    // Main Catalog Listing
    public function listAll()
    {
        $books = $this->fetchCatalog();
        return view('books.catalog', compact('books'));
    }

    // Spotlight/Featured Book Selection
    public function spotlight()
    {
        $books = $this->fetchCatalog();
        $selectedBook = $books[104]; // Dune as featured
        return view('books.details', ['book' => $selectedBook, 'isSpotlight' => true]);
    }

    // Category Filter Route
    public function categoryFilter($category = null)
    {
        $allBooks = $this->fetchCatalog();

        if ($category) {
            $filtered = array_filter($allBooks, function ($item) use ($category) {
                return strcasecmp($item['genre'], $category) === 0;
            });
        } else {
            $filtered = $allBooks;
        }

        return view('books.catalog', ['books' => $filtered, 'currentCategory' => $category]);
    }

    // Book Detail View by ID
    public function viewBook($id)
    {
        $catalog = $this->fetchCatalog();

        if (!array_key_exists($id, $catalog)) {
            abort(404, 'Book title not found in store catalog.');
        }

        $book = $catalog[$id];
        return view('books.details', compact('book'));
    }
}