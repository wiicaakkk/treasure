@extends('layouts.secondary')


@section('primary')
  <div class="row justify-content-center">
    <div class="col-lg-4">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    <main class="form-signin">
      <form>
        <center><h1 class="h3 mb-3 fw-normal">Please Login</h1></center>
        <div class="mb-3">
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
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