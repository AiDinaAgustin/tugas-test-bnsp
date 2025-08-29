@extends('layouts.app')

@section('content')
<div class="container">
    <h1>News</h1>
    @if($news->isEmpty())
        <p>No news articles available at the moment.</p>
    @else
        <div class="row">
            @foreach($news as $article)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if($article->image)
                            <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('news.show', $article->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            Published on {{ $article->published_at ? $article->published_at->format('d M Y') : 'N/A' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection