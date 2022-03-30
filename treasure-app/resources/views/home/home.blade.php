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
            <h2 class="bandung">Kata Bandung berasal dari kata bendung atau bendungan karena terbendungnya sungai Citarum oleh lava Gunung Tangkuban Parahu yang lalu membentuk telaga.</h2>
          </div>
          <div class="image-box">
            <img src="picture/2.jpg" alt="image" />
            <h2 class="bandung">Berdasarkan filosofi Sunda, kata Bandung juga berasal dari kalimat Nga-Bandung-an Banda Indung, yang merupakan kalimat sakral dan luhur karena mengandung nilai ajaran Sunda.</h2>
          </div>
          <div class="image-box">
            <img src="picture/3.jpg" alt="image" />
            <h2 class="bandung">Kota Bandung dikelilingi oleh pegunungan, sehingga bentuk morfologi wilayahnya bagaikan sebuah mangkuk raksasa, secara geografis kota ini terletak di tengah-tengah provinsi Jawa Barat</h2>
          </div>
          <div class="image-box">
            <img src="picture/4.jpg" alt="image" />
            <h2 class="bandung">Kota kembang merupakan sebutan lain untuk kota ini, karena pada zaman dulu kota ini dinilai sangat cantik dengan banyaknya pohon dan bunga-bunga yang tumbuh di sana. Selain itu Bandung dahulunya disebut juga dengan Paris van Java karena keindahannya.</h2>
          </div>
        </div>
        <div class="about-info">
        Aplikasi ‘Treasure’ ini ditujukan untuk wisatawan yang ingin mencari informasi tempat wisata suatu daerah yang berada di Kota Bandung. diharapkan bisa mempermudah masyarakat setempat ataupun wisatawan yang ingin mengetahui lebih detail tentang wisata apa saja yang dapat dikunjunginya. Selain itu, ‘Treasure’ juga menyediakan informasi akses ke lokasi dengan mudah, foto/video tempat wisata, keterangan fasilitas yang dapat dinikmati oleh wisatawan, dan beberapa informasi lainnya terkait tujuan pengembangan lokawisata bisa lebih dikenal banyak wisatawan domestik maupun mancanegara. 

        </div>
      </div>
    </section>

    <!-- Footer  -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
          <!-- Github -->
          <center><a class="btn btn-outline-light btn-floating m-1" href="https://github.com/wiicaakkk/treasure" role="button"><i class="fab fa-github"></i></a></center>
      </section>
    </div>
    <footer>Dibuat dengan <i class="bi bi-box2-heart-fill"></i> Kelompok 08</footer>
@endsection