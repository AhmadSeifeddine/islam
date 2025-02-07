<?php

namespace App\Http\Controllers\Dashboard\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\Scholar;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class YoutubeController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:youtubes_view', ['only' => ['index', 'datatable']]);
        $this->middleware('permission:youtubes_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:youtubes_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:youtubes_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.pages.youtube.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $scholars = Scholar::all();
        $categories = Category::all();
        return $this->componentResponse(view('dashboard.pages.youtube.modal.create', compact('scholars', 'categories')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'scholar_id' => 'required',
            'category_id' => 'required',
            'duration' => 'required'
        ]);

        Youtube::create([
            ...$request->all(),
            'created_by' => auth()->user()->id
        ]);
        return $this->modalToastResponse('Youtube created successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $youtube = Youtube::find($id);
    //     return $this->componentResponse(view('dashboard.pages.youtube.modal.show', compact('youtube')));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $youtube = Youtube::find($id);
        $scholars = Scholar::all();
        $categories = Category::all();
        return $this->componentResponse(view('dashboard.pages.youtube.modal.edit', compact('youtube', 'scholars', 'categories')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'scholar_id' => 'required',
            'category_id' => 'required',
            'duration' => 'required'
        ]);

        $youtube = Youtube::find($request->id);
        $youtube->update($request->all());
        return $this->modalToastResponse('Youtube updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $youtube = Youtube::find($id);
        $youtube->delete();
        return response()->json(['message' => 'Youtube deleted successfully']);
    }

    public function datatable(Request $request)
    {
        $search = request()->get('search');
        $value = isset($search['value']) ? $search['value'] : null;

        $youtubes = Youtube::with('scholar', 'category')->select(
            'id',
            'title',
            'url',
            'scholar_id',
            'category_id',
            'duration',
            'status',
            'home_page',
            'created_at',
        )
            ->when($value, function ($query) use ($value) {
                return $query->where(function ($query) use ($value) {
                    $query->where('title', 'like', '%' . $value . '%')
                        ->orWhere('url', 'like', '%' . $value . '%')
                        ->orWhereHas('scholar', function ($query) use ($value) {
                            $query->where('name', 'like', '%' . $value . '%');
                        })
                        ->orWhereHas('category', function ($query) use ($value) {
                            $query->where('name', 'like', '%' . $value . '%');
                        })
                        ->orWhere('duration', 'like', '%' . $value . '%')
                        ->orWhere('status', 'like', '%' . $value . '%');
                });
            });

        return DataTables::of($youtubes->latest())
            ->addColumn('scholar', function ($youtube) {
                return $youtube->scholar->nickname;
            })
            ->addColumn('category', function ($youtube) {
                return $youtube->category->name;
            })
            ->editColumn('created_at', function ($youtube) {
                return $youtube->created_at->diffForHumans();
            })
            ->make(true);
    }

    public function toggleStatus(string $id)
    {
        $youtube = Youtube::find($id);
        if ($youtube->status == 'show') {
            $youtube->update(['status' => 'hide']);
        } else {
            $youtube->update(['status' => 'show']);
        }
        return response()->json(['message' => 'Youtube status updated successfully']);
    }

    public function homepage(string $id)
    {
        $youtube = Youtube::find($id);

        if ($youtube->home_page == true) {
            $youtube->update(['home_page' => false]);
            return $this->successResponse(['message' => 'Youtube homepage updated successfully']);
        }

        $count = Youtube::where('home_page', true)->count();
        if ($count > 1) {
            return $this->errorResponse(['message' => 'You can only select 1 youtube for the homepage']);
        } else {
            $youtube->update(['home_page' => !$youtube->home_page]);
            return $this->successResponse(['message' => 'Youtube homepage updated successfully']);
        }
    }
}
