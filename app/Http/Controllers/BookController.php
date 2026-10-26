<?php

namespace App\Http\Controllers;

use App\Models\Book; // <-- TAMBAHKAN BARIS INI
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return view('books', compact('books'));
    }
}