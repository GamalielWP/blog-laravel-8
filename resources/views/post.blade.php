@extends('layouts.main')

@section('content')
    <?php $photo = App\Http\Controllers\PostController::getPhotos($post->category->name) ?>

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a class="text-decoration-none"
                    href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in
                    <a class="text-decoration-none"
                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                <img src="{{ !$post->image ? $photo[0]->urls->full : asset('storage/'.$post->image) }}"
                class="img-fluid" alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {{-- menjalankan tag html dalam body (tidak melakukan escaping) {!! !!} --}}
                    {!! $post->body !!}
                </article>


                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
