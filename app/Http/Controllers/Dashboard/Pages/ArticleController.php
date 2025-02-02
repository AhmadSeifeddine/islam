<?php

namespace App\Http\Controllers\Dashboard\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Article;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Scholar;
use App\Models\Category;

class ArticleController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:writing_view', ['only' => ['index']]);
        $this->middleware('permission:writing_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:writing_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:writing_delete', ['only' => ['destroy']]);
        $this->middleware('permission:writing_status', ['only' => ['status']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.pages.article.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $scolars = Scholar::all();
        $categories = Category::all();
        return $this->componentResponse(view('dashboard.pages.article.modal.create', compact('scolars', 'categories')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'scholar_id' => 'required|exists:scholars,id',
            'writing_type' => 'required|string',
        ]);

        Article::create([
            ...$request->all(),
            'created_by' => auth()->user()->id
        ]);
        return $this->modalToastResponse('Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::with('scholar', 'category')->find($id);
        return $this->componentResponse(view('dashboard.pages.article.modal.show', compact('article')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $scholars = Scholar::all();
        $categories = Category::all();
        $article = Article::find($id);
        return $this->componentResponse(view('dashboard.pages.article.modal.edit', compact('article', 'scholars', 'categories')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'scholar_id' => 'required|exists:scholars,id',
        ]);


        $article = Article::find($request->id);
        $article->update($request->all());
        return $this->modalToastResponse('Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
        return response()->json(['message' => 'Article deleted successfully']);
    }

    public function datatable(Request $request)
    {
        $search = request()->get('search');
        $value = isset($search['value']) ? $search['value'] : null;

        $articles = Article::with('category', 'scholar')->select(
            'id',
            'title',
            'category_id',
            'scholar_id',
            'writing_type',
            'status',
            'created_at',
        )
            ->when($value, function ($query) use ($value) {
                return $query->where(function ($query) use ($value) {
                    $query->where('title', 'like', '%' . $value . '%')
                        ->orWhere('status', 'like', '%' . $value . '%');
                });
            });

        return DataTables::of($articles->get())
            ->editColumn('created_at', function ($article) {
                return $article->created_at->diffForHumans();
            })
            ->editColumn('category', function ($article) {
                return $article->category->name;
            })
            ->editColumn('scholar', function ($article) {
                return $article->scholar->name;
            })
            ->make(true);
    }

    public function status(string $id)
    {
        $article = Article::find($id);
        if ($article->status == 'show') {
            $article->update(['status' => 'hide']);
        } else {
            $article->update(['status' => 'show']);
        }
        return response()->json(['message' => 'Article status updated successfully']);
    }
}
