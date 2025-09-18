@extends('landing.layouts.main')

@section('container')
    <section class="mt-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 py-5 col-md-8 mx-auto">
                <h1 class="font-weight-normal">SCAN BARCODE</h1>
                <p class="text-muted">Cari Pasien menggunakan fitur Barcode.</p>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col">
                            <div>
                                <p>Cari berdasarkan ID Barcode.</p>
                            </div>
                        </div>
                    </div>
                    <form action="/barcode">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control text-white" placeholder="Cari..." name="barcode"
                                value="{{ request('barcode') }}" autofocus>
                                <button class="btn btn-primary" type="submit" onclick="tampilkanDataPasien()"><i class="bi bi-search"></i></button>

                            {{-- <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button> --}}
                        </div>
                    </form>
                    <a class="btn btn-warning" href="/barcode"><i class="bi bi-search"> Scan Barcode</i></a>
                </div>
            </div>
        </div>
    </section>
    <div id="data-pasien" class="table-responsive">
    <!-- Tabel data pasien -->
    {{-- <div class="album py-5 bg-light">
        <div class="container"> --}}
            <h1 class="fw-light text-center mt-5">Daftar Pasien</h1>
            <div class="table-responsive">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori Pasien</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Barcode</th>
                            <th scope="col">Keluarga</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Umur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $key => $book)
                            <tr>
                                <td>{{ $books->firstItem() + $key }}</td>
                                <td>{{ $book->rak->kategori }}</td>
                                <td>{{ $book->judul }}</td>
                                <td>{!! DNS1D::getBarcodeSVG($book->no_barcode, 'EAN13', 3, 70) !!}</td>
                                <td>{{ $book->pengarang }}</td>
                                <td>{{ $book->penerbit }}</td>
                                <td>{{ $book->thn_terbit }}</td>
                                <td>{{ $book->eksemplar }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $books->links() }}
            </div>
        </div>
    </div>
    <script>
    function tampilkanDataPasien() {
        // Tampilkan tabel data pasien
        document.getElementById('data-pasien').style.display = 'block';
    }
    </script>

    {{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sembunyikan tabel data pasien saat halaman dimuat pertama kali
        document.getElementById('data-pasien').style.display = 'none';
    });

    function tampilkanDataPasien() {
        // Tampilkan tabel data pasien saat tombol pencarian ditekan
        document.getElementById('data-pasien').style.display = 'block';
    }
    </script> --}}

@endsection
