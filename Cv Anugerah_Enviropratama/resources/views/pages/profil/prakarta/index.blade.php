@extends('layout.berita')
@section('title', 'Prakarta')
@section('content')

 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Profil</li>
          <li>Prakarta</li>
        </ol>
        <h2>Prakarta</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row jus d-flex justify-content-center">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

                <div class="entry-img d-flex justify-content-center mt-3">
                <img   src="{{ asset('assets/img/ggg.jpg') }}" alt="" class="img-fluid">
                </div>
                <h6 class="d-flex justify-content-center mb-4" >PARLUHUTAN DODO BINOTO, S.P., M.P.Direktur</h6>

            <p>Assalamu’alaikum warohmatullahi wabarokatuh, Salam Sejahtera, Om Swatyastu, Tabe Salamat, Lingu Nalatai, Sembah Sujud Karendem Malempang, Adil KaTalino, Bacuramin Ka’Saruga, Basengat Ka’Jubata.</p>
            <p>Tujuan utama website ini adalah memberikan informasi bahwa kami hadir sebagai pilihan Perusahaan dalam penanganan aspek lingkungan di dalam maupun di luar negeri. CV. Anugerah Enviropratama telah memperoleh sertifikat kompetensi Lembaga Penyedia Jasa Penyusun (LPJP) AMDAL No. 0101/LPJ/AMDAL-1/LRK/KLHK dari Kementrian Lingkungan Hidup dan Kehutanan Republik Indonesia.
            </p>
            <p>Kami juga menyadari sepenuhnya terdapat kekurangan dan keterbatasan oleh sebab itu, kami berharap adanya kritik, saran dan usulan demi perbaikan mengingat tidak ada sesuatu yang sempurna tanpa saran yang membangun.</p>
            <br>
            <p>Demikian, semoga bermanfaat.</p>

            </article><!-- End blog entry -->




    </section><!-- End Blog Single Section -->


  </main><!-- End #main -->
@endsection
