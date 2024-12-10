@extends('layouts.app')

@section('content')
<div class="homepage my-5">
    <!-- Judul Utama -->
    <h1 class="text-center text-primary mb-4">Welcome to Glowify!</h1>

    <!-- Bagian Artikel Unggulan -->
    <div class="featured-section container">
        <h2 class="text-secondary text-center mb-3">Featured Articles</h2>
        <div class="row g-4">
            @forelse($featuredArticles as $article)
            <div class="col">
                <div class="card shadow-sm h-100">
      
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted">No featured articles available.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
