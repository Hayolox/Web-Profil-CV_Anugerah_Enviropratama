@extends('layout.app')

@section('title', 'CV. Anugerah Enviropratama')
@section('content')
         <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center">
      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
          <div class="col-xl-6">
            <h1>CV Anugerah Enviropratama</h1>
            <h2>Tujuan utama website ini adalah memberikan informasi bahwa kami hadir sebagai pilihan perusahaan dalam penanganan aspek lingkungan di dalam maupun di luar negeri</h2>
            <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
          </div>
        </div>
      </div>
    </section>

    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row no-gutters d-flex justify-content-center">
            <div class="content col-xl-5 d-flex align-items-stretch">
              <div class="content">
                <h3>CV Anugerah Enviropratama</h3>
                <p>
                  Lahir untuk menjawab tuntutan perkembangan industri di wilayah Indonesia yang tumbuh semakin pesat, dimana perkembangan industrialisasi meliputi : Pertambangan, Perkebunan beserta kegiatan turunannya, Kehutanan,
                  perkembangan perkotaan, serta Kegiatan Domestik lainnya. Perkembangan industrialisasi yang semakin pesat akan berbanding lurus dengan dampak negatif terhadap kualitas lingkungan terutama untuk kegiatan-kegiatan yang
                  dilakukan tanpa mempertimbangkan aspek lingkungan. Oleh karena itu, CV Anugerah Enviropratama sebagai konsultan lingkungan yang berkedudukan di Palangka Raya menjadi pelopor yang memfokuskan diri pada usaha-usaha
                  perlindungan dan pengelolaan lingkungan agar tercipta pembangunan yang berwawasan lingkungan dan berkelanjutan.
                </p>
                <a href="{{ route('about') }}" class="about-btn"><span>Selengkapnya</span> <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Berita Section ======= -->
      <section id="Berita" class="Blog">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Berita-Terbaru</h2>
            <div class="justify-content-center">
              <a href="{{ route('berita') }}" style="background-color: #61b634" class="btn btn">All Berita</a>
            </div>
          </div>

          <div class="row justify-content-center Blog-container" data-aos="fade-up" data-aos-delay="200">
           @foreach ($news as $new)
            <div class="col-lg-3 col-md-3 Blog-item filter-app mt-3">
                <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="{{ Storage::url($new->image) }}" alt="Card image cap" />
                    <div class="card-body">
                    <h5 class="card-title">{{ Str::limit($new->title, 30)  }}</h5>
                    <p class="card-text">{!! Str::limit($new->body, 300) !!}</p>
                    <a href="{{ route('single-berita', $new->slug) }}" style="background-color: #61b634" style="color: beige" class="btn btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
           @endforeach
          </div>
        </div>
      </section>
      <!-- End Berita Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
          </div>

          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p>Jln. Kinibalu Gg. Damai No.47, RT.002/RW.010, Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 73112</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p>info@example.com<br />contact@example.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call</h3>
                    <p>+62536 3238792 <br />+62 813 4815 7756</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection
