<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akida;
use App\Http\Requests\AkidaRequest;

class AkidaController extends Controller
{
    public function index()
    {
        return view('web.akida.akida');
    }

    public function store(AkidaRequest $request)
    {
        $data = $request->validated();
        $data['scholar_id'] = $request->scholar_id;
        $data['category_id'] = $request->category_id;

        return $this->storeItem(Akida::class, $data);
    }
    
    public function update(AkidaRequest $request, $id)
    {
        $data = $request->validated();
        $data['scholar_id'] = $request->scholar_id;
        $data['category_id'] = $request->category_id;

        return $this->updateItem(Akida::class, $id, $data);
    }

    public function destroy($id)
    {
        return $this->deleteItem(Akida::class, $id);
    }
}
