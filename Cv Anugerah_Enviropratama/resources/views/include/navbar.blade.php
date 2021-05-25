 <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto img-fluid">
          <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
        </h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li class="dropdown">
              <a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ route('prakarta') }}">Prakarta</a></li>
                <li class="dropdown">
                  <a href="#"><span>Pengalaman Kerja</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="{{ route('UKL-UPL') }}">UKL-UPL</a></li>
                    <li><a href="{{ route('DELH') }}">DELH</a></li>
                    <li><a href="{{ route('DPLH') }}">DPLH</a></li>
                    <li><a href="{{ route('BatuBara') }}">Pertambangan Batu Bara</a></li>
                    <li><a href="{{ route('Pertambangan-Emas') }}">Pertambangan Emas</a></li>
                    <li><a href="{{ route('Pertambangan-Zircon') }}">Pertambangan Zircon</a></li>
                    <li><a href="{{ route('Perkebunan') }}">Perkebunan</a></li>
                    <li><a href="{{ route('Pertambangan-Lainnya') }}">Pertambangan Lainnya</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('proyek') }}">Proyek Saat Ini</a></li>
                <li><a href="{{ route('Produk') }}">Produk Kami</a></li>
                <li><a href="{{ route('Struktur-Organisasi') }}">Struktur Organisasi</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#"><span>Legalitas</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Prakarta</a></li>
                <li><a href="#">Akta Notaris</a></li>
                <li><a href="#">Surat Keterangan Usaha</a></li>
                <li><a href="#">SPPKP</a></li>
                <li><a href="#">NIP OSS</a></li>
                <li><a href="#">SIUP</a></li>
                <li><a href="#">NPWP</a></li>
                <li><a href="#">SKT Wajib Pajak</a></li>
                <li><a href="#">Sertifikat LPJP</a></li>
                <li><a href="#">IUJP</a></li>
                <li><a href="#">SBU</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#Berita">Berita</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
