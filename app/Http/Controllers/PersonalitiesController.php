<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalitiesController extends Controller
{
    public function index()
    {
        return view('web.personalities');
    }
}
