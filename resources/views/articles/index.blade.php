@extends('layouts.app')
@section("content")
<div class="container">
    @if (Session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif
    {{ $articles->links() }}
    @foreach ($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <div class="card-subtitle mb-2 text-muted small">
                    {{ $article->created_at->diffForHumans() }}
                </div>
                <p class="cad-text">{{ $article->body }}</p>
                <a href="{{ url("/articles/detail/$article->id") }}" class="card-link">
                    view detail &raquo;
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
