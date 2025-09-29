<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()->paginate();

        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::query()->findOrFail($id);

        return view('article.show', compact('article'));
    }
}
