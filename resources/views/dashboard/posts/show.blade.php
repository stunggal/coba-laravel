@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="" class="btn btn-success">back</a>
            <a href="" class="btn btn-warning">edit</a>
            <a href="" class="btn btn-danger">delete</a>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="image-fluid mt-5">
            
            <article class="my-3 fs-5">
                {{ $post->body }}
            </article>
            <a href="/blog">Back to Posts</a>
        </div>
    </div>
</div>

@endsection