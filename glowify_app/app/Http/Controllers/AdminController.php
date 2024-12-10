<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::count();
        $categories = Category::count();
        $tags = Tag::count();
        return view('admin.dashboard', compact('articles', 'categories', 'tags'));
    }
}

