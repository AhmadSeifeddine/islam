<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkidaController extends Controller
{
    public function index()
    {
        return view('web.akida.akida');
    }
}
