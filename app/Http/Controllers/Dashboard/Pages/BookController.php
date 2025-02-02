<?php

namespace App\Http\Controllers\Dashboard\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Book;
use App\Models\Category;
use App\Models\Scholar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BookController extends BaseController
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
        return view('dashboard.pages.book.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $scholars = Scholar::all();
        $categories = Category::all();
        return $this->componentResponse(view('dashboard.pages.book.modal.create', compact('scholars', 'categories')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'scholar_id' => 'required',
            'category_id' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $book = Book::create([
                ...$request->except('image'),
                'created_by' => auth()->user()->id
            ]);

            if ($request->hasFile('image')) {
                $book->addMediaFromRequest('image')
                    ->toMediaCollection('avatar');
            }

            DB::commit();
            return $this->modalToastResponse('Book created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error creating book'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return $this->componentResponse(view('dashboard.pages.book.modal.show', compact('book')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $scholars = Scholar::all();
        $categories = Category::all();
        return $this->componentResponse(view('dashboard.pages.book.modal.edit', compact('book', 'scholars', 'categories')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'scholar_id' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $book = Book::find($request->id);
            $book->update($request->except('image'));

            if ($request->hasFile('image')) {
                $book->clearMediaCollection('avatar');
                $book->addMediaFromRequest('image')
                    ->toMediaCollection('avatar');
            }

            DB::commit();
            return $this->modalToastResponse('Book updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error updating book'], 500);
        }
        return $this->modalToastResponse('Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return response()->json(['message' => 'Book deleted successfully']);
    }

    public function datatable(Request $request)
    {
        $search = request()->get('search');
        $value = isset($search['value']) ? $search['value'] : null;

        $books = Book::with('scholar', 'category')->select(
            'id',
            'name',
            'category_id',
            'scholar_id',
            'publication_date',
            'genre',
            'language',
            'status',
            'created_at',
        )
            ->when($value, function ($query) use ($value) {
                return $query->where(function ($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%')
                        ->orWhereHas('scholar', function ($query) use ($value) {
                            $query->where('name', 'like', '%' . $value . '%');
                        })
                        ->orWhereHas('category', function ($query) use ($value) {
                            $query->where('name', 'like', '%' . $value . '%');
                        })
                        ->orWhere('publication_date', 'like', '%' . $value . '%')
                        ->orWhere('genre', 'like', '%' . $value . '%')
                        ->orWhere('language', 'like', '%' . $value . '%');
                });
            });

        return DataTables::of($books->latest())
            ->addColumn('category', function ($book) {
                return $book->category->name;
            })
            ->addColumn('avatar', function ($book) {

                return $book->getMedia('avatar')->first()?->getUrl();

                if ($media = $book->getMedia('avatar')->first()) {
                    return $media->getUrl();
                }
                return null;
            })
            ->addColumn('scholar', function ($book) {
                return $book->scholar->nickname;
            })
            ->editColumn('created_at', function ($book) {
                return $book->created_at->diffForHumans();
            })
            ->make(true);
    }

    public function status(string $id)
    {
        $book = Book::find($id);
        if ($book->status == 'show') {
            $book->update(['status' => 'hide']);
        } else {
            $book->update(['status' => 'show']);
        }
        return response()->json(['message' => 'Book status updated successfully']);
    }
}
