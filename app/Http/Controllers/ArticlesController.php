<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends BaseController
{
    public function index()
    {
        return view('web.article.articles');
    }
}

