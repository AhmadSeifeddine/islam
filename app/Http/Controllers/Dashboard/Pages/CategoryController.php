<?php

namespace App\Http\Controllers\Dashboard\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use function App\Helpers\buildHierarchy;
use function App\Helpers\getBreadcrumbs;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.pages.category.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $hierarchicalCategories = buildHierarchy($categories);
        return $this->componentResponse(view('dashboard.pages.category.modal.create', compact('hierarchicalCategories')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        Category::create($request->all());

        return $this->modalToastResponse('Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return $this->componentResponse(view('dashboard.pages.category.modal.show', compact('category')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = auth()->user();
        $category = Category::find($id);
        return $this->componentResponse(view('dashboard.pages.category.modal.edit', compact('category', 'user')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'string'
        ]);

        $category = Category::find($request->id);
        $category->update($request->all());
        return $this->modalToastResponse('Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }

    public function datatable(Request $request)
    {
        $search = request()->get('search');
        $value = isset($search['value']) ? $search['value'] : null;

        $categorys = Category::select(
            'id',
            'name',
            'parent_id',
            'created_at'
        )
            ->when($value, function ($query) use ($value) {
                return $query->where(function ($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%');
                });
            });


        return DataTables::of($categorys->get())
            ->editColumn('created_at', function ($category) {
                return $category->created_at->diffForHumans();
            })
            ->addColumn('breadcrumbs', function ($category) {
                return getBreadcrumbs($category->id);
            })
            ->make(true);
    }
}
