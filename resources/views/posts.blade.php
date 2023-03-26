@extends('layouts.main')

@section('content')
    <?php $photo = App\Http\Controllers\PostController::getPhotos($posts[0]->category->name) ?>

    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count()) 
        <div class="card mb-3">
            <img src="{{ $photo[0]->urls->full }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">

            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>By. <a class="text-decoration-none"
                    href="/author/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                    <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->name }}
                    </a>
                    <small class="text-muted">
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No posts found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <?php $photo = App\Http\Controllers\PostController::getPhotos($post->category->name) ?>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2"
                    style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    <img src="{{ $photo[$post->category->id]->urls->full }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>By. <a class="text-decoration-none"
                        href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>
                        <small class="text-muted">
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>

            @endforeach
        </div>
    </div>
@endsection
