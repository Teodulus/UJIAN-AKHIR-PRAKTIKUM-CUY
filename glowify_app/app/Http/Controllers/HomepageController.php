<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        // Fetch featured articles from the database
        $featuredArticles = Article::where('is_featured', true)->take(5)->get();

        // Pass the variable to the view
        return view('homepage', compact('featuredArticles'));
    }
}
