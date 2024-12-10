<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->get();
        return view('about', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with(['category', 'tags', 'user'])->findOrFail($id);
        return view('article', compact('article'));
    }
}

