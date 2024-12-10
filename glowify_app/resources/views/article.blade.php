@extends('layouts.app')

@section('content')
<div class="articles-section">
    <h1>Articles</h1>
    <div class="articles-list">
        @foreach($articles as $article)
        <div class="article-card">
            <h2>{{ $article->title }}</h2>
            <p>{{ Str::limit($article->description, 100) }}</p>
            <a href="/articles/{{ $article->id }}" class="btn">Read More</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
