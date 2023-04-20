@extends('layout')

@section('content')
    <div class="mt-4 px-4 pb-4 d-flex justify-content-between align-items-center">
        <a href="{{route('index')}}" class="text-decoration-none text-dark text-3xl font-bold m-0 fs-1">Elasticsearch</a>
        <form action="{{route('searchBlogArticles')}}" method="POST" class="d-flex gap-2 h-50">
            @csrf @method('POST')
            <input type="text" name="query" value="{{ old('query') }}" class="form-control bg-light">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <div class="bg-light p-4">
        <h2>{{ $article->title }}</h2>
        {!! $article->content !!}
    </div>
@endsection
