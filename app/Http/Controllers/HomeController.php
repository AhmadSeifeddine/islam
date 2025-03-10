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
        $books = Book::active()->isInHomepage()->with(['scholar', 'category', 'explanations', 'media'])->get();
        $personalities = Scholar::active()->isInHomepage()->with('media')->get()->map(function ($scholar) {
            return [
                'id' => $scholar->id,
                'nickname' => $scholar->nickname,
                'biography' => $scholar->biography,
                'nationality' => $scholar->nationality,
                'birth_date' => $scholar->getBirthDateHijri(),
                'death_date' => $scholar->getDeathDateHijri(),
                'isRecomanded' => $scholar->recommended_score,
                'image' => $scholar->getFirstMediaUrl('avatar') ?: 'images/default-personality.jpg'
            ];
        });
        $youtube = Youtube::with(['scholar', 'category'])->get();

        return view('web.landing.index')->with([
            'youtube' => $youtube,
            'books' => $books,
            'personalities' => $personalities
        ]);
    }
}
