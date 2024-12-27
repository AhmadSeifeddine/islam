<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiqhController extends Controller
{
    public function index()
    {
        return view('web.fiqh.fiqh');
    }
}
