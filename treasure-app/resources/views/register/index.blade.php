@extends('layouts.main')


@section('primary')
  <div class="row justify-content-center">
    <div class="col-md-4">
    <main class="form-register">
      <form>
        <center><h1 class="h3 mb-3 fw-normal">Form Regristrasi</h1></center>
        <label for="floatingInput">Username</label>
        <div class="mb-3">
            <div class="form-floating">
            <input type="username" class="form-control" id="floatingInput">
            </div>
        </div>
        <label for="floatingInput">Email address</label>
        <div class="mb-3">
            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" >
            </div>
        </div>
        <label for="floatingPassword">Password</label>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword">
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Regristrasi</button>
      </form>
      <small class="d-block text-center mt-3">Sudah terdaftar? <a href="/login">Login sekarang!</a></small>
    </main>
    </div>
  </div>
@endsection