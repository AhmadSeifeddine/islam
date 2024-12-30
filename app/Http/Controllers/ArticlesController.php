<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
class ArticlesController extends BaseController
{
    public function index()
    {
        return view('web.article.articles');
    }

    public function store(ArticleRequest $request)
    {
        $data = $request->validated();
        $data['scholar_id'] = $request->scholar_id;
        $data['category_id'] = $request->category_id;
        return $this->storeItem(Article::class, $data);
    }

    public function update(ArticleRequest $request, $id)
    {
        $data = $request->validated();
        $data['scholar_id'] = $request->scholar_id;
        $data['category_id'] = $request->category_id;

        return $this->updateItem(Article::class, $id, $data);
    }

    public function destroy($id)
    {
        return $this->deleteItem(Article::class, $id);
    }
}

