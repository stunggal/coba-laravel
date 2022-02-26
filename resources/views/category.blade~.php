@extends('layout.main')

@section('container')
    <h1>Halaman category : {{ $category }}</h1>
    @foreach ($posts as $p)
    <article class="mb-5">
        <h2>
            <a href="/post/{{ $p->slug }}">{{ $p->title }}</a>
        </h2>
        <p>{{ $p->exerpt }}</p>
    </article>
    @endforeach
@endsection