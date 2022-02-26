@extends('layout.main')

@section('container')
    <h1>{{ $title }}</h1>

    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p>
                <small>
                    by <a href="/auth/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
                    <p class="card-text">{{ $posts[0]->exerpt }}
                    </p>
                </small>
            <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>
    @else
        <p class="text-center fs-4 ">No post found.</p>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $p)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-2 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $p->category->slug }}" class="text-white text-decoration-none">{{ $p->category->name }}</a></div>
                        <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <small>
                                by <a href="/auth/{{ $p->user->username }}" class="text-decoration-none">{{ $p->user->name }}</a> in <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a><small> {{ $p->created_at->diffForHumans() }}</small></p>
                                <p class="card-text">{{ $p->exerpt }}</p>
                            </small>
                            <p class="card-text">{{ $p->exerpt }}</p>
                            <a href="/post/{{ $p->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection