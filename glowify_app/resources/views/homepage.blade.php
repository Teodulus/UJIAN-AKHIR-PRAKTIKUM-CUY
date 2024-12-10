@extends('layouts.app')

@section('content')
<div class="homepage my-5">
    <h1 class="text-center text-primary mb-4">Welcome to Glowify!</h1>
    <div class="featured-section">
        <h2 class="text-secondary text-center mb-3">Featured Articles</h2>
        <div class="row g-4">
            @foreach($featuredArticles as $article)
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{ $article->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($article->description, 100) }}</p>
                        <a href="/articles/{{ $article->id }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
