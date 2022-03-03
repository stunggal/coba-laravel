@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">my post</h1>
</div>

<div class="table-responsive col-lg-8">
    <a href="/dashboard/post/create" class="btn btn-primary mb-3">create new post</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">judul</th>
            <th scope="col">kategori</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->category->name }}</td>
            <td>
                <a href="/dashboard/post/{{ $p->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/post/{{ $p->slug }}" class="badge bg-warning"><span data-feather="eye"></span></a>
                <a href="/dashboard/post/{{ $p->slug }}" class="badge bg-danger"><span data-feather="eye"></span></a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection