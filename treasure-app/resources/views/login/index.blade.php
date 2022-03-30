@extends('layouts.secondary')


@section('primary')
  <div class="row justify-content-center">
    <div class="col-lg-4">
      <main class="form-signin">
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form action="/login" method="post">
          @csrf
          <center><h1 class="h3 mb-3 fw-normal">Please Login</h1></center>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email') 
                <div class="invalid-feedback">
                  {{ $message }}
                </div> 
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
              <label for="password">Password</label>
            </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="d-block text-center mt-3">Belum terdaftar? <a href="/register">Daftar sekarang!</a></small>
      </main>
    </div>
  </div>
@endsection