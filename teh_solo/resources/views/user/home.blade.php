@extends('/layouts.template')
@section('base')

{{-- Halaman Home --}}
<div class="container">
    <h1 class="welcome text-center p-3">SELAMAT DATANG<br>DI ES TEH SOLO</h1>
    {{-- Bagian Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="/assets/1.png" class="d-block w-50">
          </div>
          <div class="carousel-item">
              <img src="/assets/2.png" class="d-block w-50">
          </div>
          <div class="carousel-item">
              <img src="/assets/3.png" class="d-block w-50">
          </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <p class="text-center col-lg-9 p-3">
            Temukan beragam pilihan teh premium yang kami sajikan dengan penuh cinta dan dedikasi. Mulai dari Es Teh
            Tarik khas Solo hingga kreasi unik kami, kami mengundang Anda untuk menikmati kelezatan dalam suasana hangat
            dan ramah di gerai kami. Jangan lewatkan kesempatan untuk membawa pulang secangkir kesejukan dengan layanan
            pesan antar kami. Nikmati Es Teh Solo di mana pun Anda berada.
        </p>
    </div>

    <div class="text-center p-3">
        <h5>Jelajahi Menu</h5>
        <p><em>Mari jadikan setiap cangkir Es Teh di sini sebagai momen istimewa dalam hidup Anda</em></p>
        <a href="/menu" class="btn btn-outline-dark">Lihat Menu</a>
    </div>
</div>

@endsection
