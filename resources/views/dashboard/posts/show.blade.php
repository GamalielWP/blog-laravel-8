@extends('dashboard.layouts.main')

@section('container')
    <?php $photo = App\Http\Controllers\PostController::getPhotos($post->category->name); ?>

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success">
                    <span data-feather="arrow-left"></span>
                    Back to all my posts
                </a>
                <a href="" class="btn btn-warning">
                    <span data-feather="edit"></span>
                    Edit
                </a>
                <a href="" class="btn btn-danger">
                    <span data-feather="x-circle"></span>
                    Delete
                </a>

                <img src="{{ $photo[$post->category->id]->urls->full }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {{-- menjalankan tag html dalam body (tidak melakukan escaping) {!! !!} --}}
                    {!! $post->body !!}
                </article>


                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
