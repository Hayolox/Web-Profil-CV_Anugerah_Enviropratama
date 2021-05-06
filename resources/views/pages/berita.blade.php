@extends('layout.berita')
@section('title', 'All Berita')
@section('content')

 <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Berita</li>
          </ol>
          <h2>Berita</h2>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-8 entries">
              @foreach ($news as $new)
                <article class="entry">
                <div class="entry-img">
                  <img src="{{ Storage::url($new->image) }}" alt="" class="img-fluid" />
                </div>

                <h2 class="entry-title">
                  <a href="blog-single.html">{{ $new->title }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> Admin</li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $new->created_at->format("d,F,Y") }}</time></a>
                    </li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {!! $new->body !!}
                  </p>
                  <div class="read-more">
                    <a href="{{ route('single-berita',$new->slug) }}">Read More</a>
                  </div>
                </div>
              </article>
              @endforeach




              <!-- End blog entry -->
          </div>


        </div>
      </section>
      <!-- End Blog Section -->
    </main>
    <!-- End #main -->
@endsection
