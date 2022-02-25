@extends('layout.main')

@section('container')
    <h1>Halaman categories</h1>
    @foreach ($categories as $c)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{ $c->slug }}">{{ $c->name }}</a>
            </h2>
        </li>
    </ul>
    @endforeach
@endsection