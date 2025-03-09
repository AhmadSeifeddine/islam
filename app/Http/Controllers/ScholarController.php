<?php

namespace App\Http\Controllers;

use App\Models\Scholar;
use App\Http\Requests\ScholarRequest;
use Illuminate\Http\Request;

class ScholarController extends BaseController
{
    public function index()
    {
        return view('web.personality.personalities');
    }

    public function profile($id)
    {
        $scholar = Scholar::with('media')->findOrFail($id);
        return view('web.personality.personalityProfile', compact('scholar'));
    }

    public function store(ScholarRequest $request)
    {
        return $this->storeItem(Scholar::class, $request->validated());
    }

    public function edit($id)
    {
        $scholar = Scholar::findOrFail($id);
        return $this->sendSuccessResponse('Scholar retrieved successfully', 200, $scholar);
    }

    public function update(ScholarRequest $request, $id)
    {
        return $this->updateItem(Scholar::class, $id, $request->validated(), [
            'file' => $request->file('image'),
            'collection' => 'scholar_images',
        ]);
    }

    public function destroy($id)
    {
        $this->deleteItem(Scholar::class, $id);
    }
}
