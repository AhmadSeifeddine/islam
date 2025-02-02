<?php

namespace App\Http\Controllers\Dashboard\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Book;
use App\Models\Book_Explanation;
use App\Models\Scholar;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BookExplanationController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:books_view', ['only' => ['index']]);
        $this->middleware('permission:books_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:books_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:books_delete', ['only' => ['destroy']]);
        $this->middleware('permission:books_status', ['only' => ['status']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.pages.book_Explanation.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $youtubes = Youtube::all();
        $books = Book::all();
        return $this->componentResponse(view('dashboard.pages.book_Explanation.modal.create', compact('youtubes', 'books')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'youtube_id' => 'required',
            'book_id' => 'required'
        ]);

        Book_Explanation::create([
            ...$request->all(),
            'created_by' => auth()->user()->id
        ]);
        return $this->modalToastResponse('Book_Explanation created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book_Explanation = Book_Explanation::find($id);
        return $this->componentResponse(view('dashboard.pages.book_Explanation.modal.show', compact('book_Explanation')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book_Explanation = Book_Explanation::find($id);
        $youtubes = Youtube::all();
        $books = Book::all();
        return $this->componentResponse(view('dashboard.pages.book_Explanation.modal.edit', compact('book_Explanation', 'youtubes', 'books')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'youtube_id' => 'required',
            'book_id' => 'required'
        ]);

        $book_Explanation = Book_Explanation::find($request->id);
        $book_Explanation->update($request->all());
        return $this->modalToastResponse('Book_Explanation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book_Explanation = Book_Explanation::find($id);
        $book_Explanation->delete();
        return response()->json(['message' => 'Book_Explanation deleted successfully']);
    }

    public function datatable(Request $request)
    {
        $search = request()->get('search');
        $value = isset($search['value']) ? $search['value'] : null;

        $book_Explanations = Book_Explanation::with(['book', 'youtube'])->select(
            'id',
            'book_id',
            'youtube_id',
            'status',
            'created_at',
        )
            ->when($value, function ($query) use ($value) {
                return $query->where(function ($query) use ($value) {
                    $query->where('book', function ($query) use ($value) {
                        $query->where('name', 'like', '%' . $value . '%');
                    })
                        ->orWhere('youtube', function ($query) use ($value) {
                            $query->where('title', 'like', '%' . $value . '%');
                        });
                });
            });

        return DataTables::of($book_Explanations->latest())
            ->addColumn('youtube', function ($book) {
                return $book->youtube->title;
            })
            ->addColumn('book', function ($book) {
                return $book->book->name;
            })

            ->editColumn('created_at', function ($book_Explanation) {
                return $book_Explanation->created_at->diffForHumans();
            })
            ->make(true);
    }

    public function toggleStatus(string $id)
    {
        $book_Explanation = Book_Explanation::find($id);
        if ($book_Explanation->status == 'hide') {
            $book_Explanation->update(['status' => 'show']);
        } else {
            $book_Explanation->update(['status' => 'hide']);
        }
        return response()->json(['message' => 'Book_Explanation status updated successfully']);
    }
}
