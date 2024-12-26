<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalityProfileController extends Controller
{
    public function index()
    {
        return view('web.personality.personalityProfile');
    }
}
