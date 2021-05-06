@extends('layout.berita')
@section('title', 'Detail Berita')
@section('content')

 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('berita') }}">Berita</a></li>
          <li>Detail Berita</li>
        </ol>
        <h2>Detail Berita</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row d-flex justify-content-center">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                  <img src="{{ Storage::url($new->image) }}" alt="" class="img-fluid" />
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $new->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $new->created_at->format("d,F,Y") }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">

                {!! $new->body !!}

              </div>



            </article><!-- End blog entry -->




    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
@endsection
