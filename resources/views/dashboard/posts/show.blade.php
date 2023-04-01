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
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                    <span data-feather="edit"></span>
                    Edit
                </a>
                <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ !$post->image ? $photo[0]->urls->full : asset('storage/'.$post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                </div>

                <article class="my-3 fs-5">
                    {{-- menjalankan tag html dalam body (tidak melakukan escaping) {!! !!} --}}
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
