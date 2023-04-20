@extends('layout')

@section('content')
    <div class="mt-4 px-4 pb-4 d-flex justify-content-between align-items-center">
        <a href="{{route('index')}}" class="text-decoration-none text-dark text-3xl font-bold m-0 fs-1">Elasticsearch</a>
        <form action="{{route('index')}}" method="GET" class="d-flex gap-2 h-50">
            <input type="text" name="query" value="{{ request('query') }}" class="form-control bg-light">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    @if(!$articles->isEmpty())
        <div class="row bg-white">
            @foreach ($articles as $article)
                <div class="col-md-6 col-lg-3 shadow-md rounded-md">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">{{ $article->title }}</h2>
                        <p class="text-gray-500">{{ $article->description }}</p>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">{{ $article->created_at->format('d.m.Y H:i') }}</span>
                            <a href="{{route('showBlogArticle', $article->slug)}}" class="text-blue-500">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="p-4 bg-light">
            <h4>No articles found</h4>
        </div>
    @endif
    <div class="mt-4 px-4">
        {{ $articles->links() }}
    </div>
@endsection
