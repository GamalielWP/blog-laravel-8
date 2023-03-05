@extends('layouts.main')

@section('content')
    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in
        <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    {{-- menjalankan tag html dalam body (tidak melakukan escaping) {!! !!} --}}
    {!! $post->body !!}

    <a href="/blog" class="d-block mt-3">Back to Posts</a>
@endsection
