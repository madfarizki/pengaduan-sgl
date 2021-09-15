@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!-- This -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Pengaduan Masyarakat</h1>
      <h2>Kecamatan Sagalaherang</h2>
      <a href="{{ route('pengaduan')}}" class="btn-get-started scrollto">Buat Pengaduan</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row justify-content-center">


          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bxs-megaphone"></i>
                    <h4>Tulis Pengaduan</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Tindak Lanjut</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bx-check-circle'></i>
                    <h4>Selesai</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class='bx bx-list-check' ></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $pengaduan }} " data-purecounter-duration="1" class="purecounter"></span>
              <p>Semua Pengaduan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class='bx bx-loader'></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $proses }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sedang Diproses</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class='bx bx-check-circle'></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $selesai }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Selesai</p>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Counts Section -->

  </main><!-- End #main -->

  <!-- End This -->

@endsection
