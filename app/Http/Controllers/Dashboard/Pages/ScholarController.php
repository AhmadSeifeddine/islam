<?php

namespace App\Http\Controllers\Dashboard\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Scholar;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class ScholarController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:scholars_view', ['only' => ['index', 'datatable']]);
        $this->middleware('permission:scholars_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:scholars_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:scholars_delete', ['only' => ['destroy']]);
        $this->middleware('permission:scholars_status', ['only' => ['status', 'homepage']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.pages.scholar.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->componentResponse(view('dashboard.pages.scholar.modal.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nationality' => 'required',
            'status' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        DB::beginTransaction();
        try {
            $scholar = Scholar::create([
                ...$request->except('image'),
                'created_by' => auth()->user()->id
            ]);

            if ($request->hasFile('image')) {
                $scholar->addMediaFromRequest('image')
                    ->toMediaCollection('avatar');
            }

            DB::commit();
            return $this->modalToastResponse('Scholar created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error creating scholar'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $scholar = Scholar::find($id);
        return $this->componentResponse(view('dashboard.pages.scholar.modal.show', compact('scholar')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $scholar = Scholar::find($id);
        return $this->componentResponse(view('dashboard.pages.scholar.modal.edit', compact('scholar')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nationality' => 'required',
            'status' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        DB::beginTransaction();
        try {
            $scholar = Scholar::find($request->id);
            $scholar->update($request->except('image'));

            if ($request->hasFile('image')) {
                $scholar->clearMediaCollection('avatar');
                $scholar->addMediaFromRequest('image')
                    ->toMediaCollection('avatar');
            }

            DB::commit();
            return $this->modalToastResponse('Scholar updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error updating scholar'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scholar = Scholar::find($id);
        $scholar->clearMediaCollection('avatar');
        $scholar->delete();
        return response()->json(['message' => 'Scholar deleted successfully']);
    }

    public function datatable(Request $request)
    {
        $search = request()->get('search');
        $value = isset($search['value']) ? $search['value'] : null;

        $scholars = Scholar::select(
            'id',
            'name',
            'nickname',
            'nationality',
            'death_date',
            'status',
            'is_in_homepage',
            'created_at'
        )
            ->when($value, function ($query) use ($value) {
                return $query->where(function ($query) use ($value) {
                    $query->where('nickname', 'like', '%' . $value . '%')
                        ->orWhere('nationality', 'like', '%' . $value . '%')
                        ->orWhere('death_date', 'like', '%' . $value . '%')
                        ->orWhere('status', 'like', '%' . $value . '%')
                        ->orWhere('is_in_homepage', 'like', '%' . $value . '%');
                });
            });

        if ($request->is_in_homepage) {
            $scholars->where('is_in_homepage', true);
        }

        if ($request->status) {
            $scholars->where('status', $request->status);
        }

        return DataTables::of($scholars->get())
            ->addColumn('avatar', function ($scholar) {

                return $scholar->getMedia('avatar')->first()?->getUrl();

                if ($media = $scholar->getMedia('avatar')->first()) {
                    return $media->getUrl();
                }
                return null;
            })
            ->editColumn('status', function ($scholar) {
                return $scholar->status ? 'Active' : 'Inactive';
            })
            ->editColumn('created_at', function ($scholar) {
                return $scholar->created_at->diffForHumans();
            })
            ->make(true);
    }

    public function status(string $id)
    {
        $scholar = Scholar::find($id);
        if ($scholar->status == true) {
            $scholar->update(['status' => false]);
        } else {
            $scholar->update(['status' => true]);
        }
        return $this->successResponse(['message' => 'Scholar status updated successfully']);
    }

    public function homepage(string $id)
    {
        $scholar = Scholar::find($id);

        if ($scholar->is_in_homepage == true) {
            $scholar->update(['is_in_homepage' => false]);
            return $this->successResponse(['message' => 'Scholar homepage updated successfully']);
        }

        $count = Scholar::where('is_in_homepage', true)->count();
        if ($count > 1) {
            return $this->errorResponse(['message' => 'You can only select 1 scholar for the homepage']);
        } else {
            $scholar->update(['is_in_homepage' => !$scholar->is_in_homepage]);
            return $this->successResponse(['message' => 'Scholar homepage updated successfully']);
        }
    }
}
