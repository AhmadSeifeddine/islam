<?php

namespace App\Http\Controllers;

use App\Http\Requests\FiqhRequest;
use App\Models\Fiqh;
use Illuminate\Http\Request;

class FiqhController extends Controller
{
    public function index()
    {
        return view('web.fiqh.fiqh');
    }

    public function show($id)
    {
        return $this->showItem(Fiqh::class, $id);
    }

    public function store(FiqhRequest $request)
    {
        $data = $request->validated();
        $data['scholar_id'] = $request->scholar_id;
        $data['category_id'] = $request->category_id;

        return $this->storeItem(Fiqh::class, $data);
    }

    public function update(FiqhRequest $request, $id)
    {
        $data = $request->validated();
        $data['scholar_id'] = $request->scholar_id;
        $data['category_id'] = $request->category_id;

        return $this->updateItem(Fiqh::class, $id, $data);
    }

    public function destroy($id)
    {
        return $this->destroyItem(Fiqh::class, $id);
    }
}
