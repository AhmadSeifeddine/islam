<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('web.book.books');
    }

    public function index2()
    {
        return view('web.book.book');
    }
}
