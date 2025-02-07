<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Scholar;
use App\Models\Youtube;
use Illuminate\Http\Request;

use function App\Helpers\dateFormat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::with(['scholar', 'category', 'explanations'])->get();
        $personalities = Scholar::with('media')->get();
        $youtube = Youtube::with(['scholar', 'category'])->get();

        return view('web.landing.index')->with([
            'youtube' => $youtube,
            'books' => $books,
            'personalities' => $personalities
        ]);;
    }
}
