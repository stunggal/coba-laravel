@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if (session()->has('success'))
            
        @endif
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

<main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Halaman Login</h1>
    <form>
  
        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
    </form>
    <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">daftar</a> sekarang</small>
</main>  
    </div>
</div>

    
@endsection