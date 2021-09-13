@extends('layouts.app')

@section('title', 'Pengaduan')

@section('content')
<main id="main" class="martop">

    <section class="inner-page">
      <div class="container ">
        <div class="title text-center mb-5">
            <h3 class="fw-bold">Layanan Pengaduan Masyarakat Sagalaherang</h3>
            <h5 class="fw-normal">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h5>
        </div>
       <div class="card card-responsive p-4 border-0 col-md-8 shadow rounded mx-auto">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="judul_laporan" class="form-label">Judul Laporan</label>
                <input type="text" value="{{ old('judul_laporan') }}" name="judul_laporan" id="judul_laporan"
                    placeholder="Ketik Judul Pengaduan" class="form-control @error('judul_laporan') is-invalid @enderror" required >
                @error('judul_laporan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="isi_laporan" class="form-label">Isi Laporan</label>
                <textarea name="isi_laporan" id="isi_laporan"
                    placeholder="Ketik isi Pengaduan" rows="5" class="form-control @error('isi_laporan') is-invalid @enderror" required></textarea>
                @error('isi_laporan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="tgl_kejadian" class="form-label">Tanggal Kejadian</label>
                <input type="date" value="{{ old('tgl_kejadian') }}" name="tgl_kejadian" id="tgl_kejadian"
                    placeholder="Tanggal Kejadian" class="form-control @error('tgl_kejadian') is-invalid @enderror" required
                    >
                @error('tgl_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="lokasi_kejadian" class="form-label">Lokasi Kejadian</label>
                <textarea name="lokasi_kejadian" id="lokasi_kejadian"
                    placeholder="Ketik Lokasi Kejadian" rows="3" class="form-control @error('lokasi_kejadian') is-invalid @enderror" required></textarea>
                @error('lokasi_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="kategori_kejadian" class="form-label">Lokasi Kejadian</label>
                <select name="kategori_kejadian" id="kategori_kejadian" class="form-select" required>
                    <option value="" selected disabled>Pilih Kategori Kejadian</option>
                    <option value="agama">Agama</option>
                    <option value="hukum">Hukum</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="sosial">Sosial</option>
                </select>
                @error('kategori_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="foto" class="form-label">Foto Bukti</label>
                <input type="file" name="foto" id="foto" class="form-control @error('file') is-invalid @enderror" required>
                @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">KIRIM</button>

        </form>
       </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
