@extends('layouts.secondary')


@section('primary')
  <div class="row justify-content-center">
    <div class="col-md-5">
    <main class="form-register">
      <form action="/register" method="post">
        <center><h1 class="h3 mb-3 fw-normal">Form Regristrasi</h1></center>
        @csrf
            <div class="form-floating md-5">
              <input type="text" name="name" class="form-control roude-top  @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-floating md-5">
                <input type="text" name="Username" class="form-control   @error('Username') is-invalid @enderror" id="Username" placeholder="Username" required value="{{ old('Username') }}">
                <label for="username">UserName</label>
                @error('Username')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
              </div>

            <div class="form-floating md-5">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
            </div>

        <div class="form-floating md-5">
            <input type="password" class="form-control roude-button" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          @error('password')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mt-3">
          <button class="w-100 btn btn-lg btn-primary" type="submit">Regristrasi</button>
        </div>
      </form>
      <small class="d-block text-center mt-3">Sudah terdaftar? <a href="/login">Login sekarang!</a></small>
    </main>
    </div>
  </div>
@endsection
