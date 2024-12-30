<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youtube;
use App\Http\Requests\YoutubeRequest;
class YoutubeController extends BaseController
{
    public function index()
    {
        return view('web.youtube.youtube');
    }

    public function edit($id)
    {
        $youtube = Youtube::findOrFail($id);
        return $this->sendSuccessResponse('Youtube retrieved successfully', 200, $youtube);
    }

    public function update(YoutubeRequest $request, $id)
    {
        $data = $request->validated();
        $data['scholar_id'] = $request->scholar_id;

        return $this->updateItem(Youtube::class, $id, $data);
    }

    public function destroy($id)
    {
        $this->deleteItem(Youtube::class, $id);
    }

    public function store(YoutubeRequest $request)
    {
        try {
            $data = $request->validated();

            $youtube = Youtube::create([
                ...$data,
                'scholar_id' => $request->scholar_id
            ]);

            return $this->sendSuccessResponse(
                'Youtube video created successfully',
                201,
                $youtube
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse(
                'Error creating Youtube video: ' . $e->getMessage(),
                500
            );
        }
    }
}
