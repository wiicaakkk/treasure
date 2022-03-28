@extends('layouts.main')


@section('primary')
    <!-- Header -->
    <header>
      <nav>
        <h1 class="logo">
          <a href="/">Treasure</a>
        </h1>
        <a href="/login" class="btn-sign-up"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
      </nav>
      <div class="header-title">Bandung.</div>
      <div class="header-bottom"></div>
    </header>

    <!-- About -->
    <section id="about">
      <div class="about-container">
        <div class="image-gallery">
          <div class="image-box">
            <img src="picture/1.jpg" alt="image" />
            <h2 class="bandung">BA</h2>
          </div>
          <div class="image-box">
            <img src="picture/2.jpg" alt="image" />
            <h2 class="bandung">ND</h2>
          </div>
          <div class="image-box">
            <img src="picture/3.jpg" alt="image" />
            <h2 class="bandung">OE</h2>
          </div>
          <div class="image-box">
            <img src="picture/4.jpg" alt="image" />
            <h2 class="bandung">NG</h2>
          </div>
        </div>
        <div class="about-info">
        User pengguna aplikasi ‘Treasure’ ini ditujukan untuk wisatawan yang ingin mencari informasi tempat wisata suatu daerah yang berada di Kota Bandung.
        </div>
      </div>
    </section>

    <!-- Footer  -->
    <footer>Dibuat dengan <i class="bi bi-box2-heart-fill"></i> Kelompok 08</footer>
@endsection