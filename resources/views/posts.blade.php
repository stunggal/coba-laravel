@extends('layout.main')

@section('container')
    <h1>Halaman Posts</h1>
    @foreach ($posts as $p)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/post/{{ $p->slug }}" class="text-decoration-none">{{ $p->title }}</a>
        </h2>
        <h5>by <a href="#" class="text-decoration-none">{{ $p->user->name }}</a> in <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a></h5>
        <p>{{ $p->exerpt }}</p>

        <a href="/post/{{ $p->slug }}" class="text-decoration-none">Read more ....</a>
    </article>
    @endforeach
@endsection