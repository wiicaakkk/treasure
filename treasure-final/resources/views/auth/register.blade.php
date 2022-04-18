@extends('layouts.secondary')


@section('primary')
  <div class="row justify-content-center">
    <div class="col-lg-4">
    <main class="form-register">
      <form action="/register" method="post">
        <center><h1 class="h3 mb-3 fw-normal">Form Regristrasi</h1></center>
        @csrf

            <div class="form-floating mb-3">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('name') }}">
              <label for="username">Name</label>
              @error('username')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
            </div>
        <div class="form-floating mb-3">
          <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" required>
          <label for="password">Password</label>
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
