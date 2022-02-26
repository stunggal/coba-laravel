@extends('layout.main')
{{-- @dd($post) --}}
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <h5>by <a href="/auth/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="image-fluid">
            
            <article class="my-3 fs-5">
                {{ $post->body }}
            </article>
            <a href="/blog">Back to Posts</a>
        </div>
    </div>
</div>
    
@endsection