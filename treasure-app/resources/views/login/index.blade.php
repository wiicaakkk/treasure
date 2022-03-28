@extends('layouts.main')


@section('primary')
  <div class="row justify-content-center">
    <div class="col-md-4">
    <main class="form-signin">
      <form>
        <center><h1 class="h3 mb-3 fw-normal">Please Login</h1></center>
        <div class="mb-3">
          <label for="floatingInput">Email address</label>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          </div>
        </div>
        <div class="mb-3">
          <label for="floatingPassword">Password</label>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
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