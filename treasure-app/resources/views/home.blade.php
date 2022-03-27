@extends('layouts.main')


@section('primary')
    <!-- Header -->
    <header>
      <nav>
        <h1 class="logo">
          <a href="/">Treasure</a>
        </h1>
        <a href="" class="btn-sign-up">Sign in</a>
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
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, expedita? Ex id ut est veniam obcaecati doloribus nemo similique sed provident placeat alias quis voluptatibus, tenetur assumenda nam! Perspiciatis, perferendis.
        </div>
      </div>
    </section>

    <!-- Footer  -->
    <footer>&copy; Kelompok 08</footer>
@endsection