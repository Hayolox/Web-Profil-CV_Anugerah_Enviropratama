@extends('layout.berita')
@section('title', 'Struktur Organisasi')
@section('content')

 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Profil</li>
          <li>Struktur Organisasi</li>
        </ol>
        <h2>Struktur Organisasi</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" style="margin-bottom: 220px" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row jus d-flex justify-content-center">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">


           <div class="entry-img d-flex justify-content-center mt-3">
                <img   src="{{ asset('assets/img/struktur.jpg') }}" alt="" class="img-fluid">
            </div>

            </article><!-- End blog entry -->




    </section><!-- End Blog Single Section -->


  </main><!-- End #main -->
@endsection
