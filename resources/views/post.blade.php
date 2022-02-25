@extends('layout.main')
{{-- @dd($post) --}}
@section('container')
<article class="mb-5">
    <article class="mb-5">
        <h2>
            {{ $post->title }}
        </h2>
        <h5>by <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{{ $post->body }}</p>
    </article>
    <a href="/blog">Back to Posts</a>
@endsection