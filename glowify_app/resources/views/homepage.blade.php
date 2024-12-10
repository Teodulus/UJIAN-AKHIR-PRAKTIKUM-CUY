@extends('layouts.app')

@section('content')
<div class="homepage">
    <h1>Welcome to Glowify!</h1>
    <div class="featured-section">
        <h2>Featured Articles</h2>
        <div class="articles-list">
            @foreach($featuredArticles as $article)
            <div class="article-card">
                <h2>{{ $article->title }}</h2>
                <p>{{ Str::limit($article->description, 100) }}</p>
                <a href="/articles/{{ $article->id }}" class="btn">Read More</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
