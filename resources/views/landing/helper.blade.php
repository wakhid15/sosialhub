@extends('landing.layouts.main')

@section('container')
    <section class="mt-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 mt-5 col-md-8 mx-auto">
                <h1 class="font-weight-normal">FAQ</h1>
                <p class=" text-muted">Frequently Asked Questions</p>
            </div>
        </div>
        <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Apa yang dimaksud dengan Sosial-Hub?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body text-start">
                        <p> Sosial-Hub adalah sebuah platform digital atau aplikasi berbasis komunitas yang memungkinkan masyarakat untuk:

Melaporkan ODGJ yang hilang atau terlihat di suatu tempat.

Menyebarkan informasi ciri-ciri ODGJ hilang (foto, nama, lokasi terakhir).

Berinteraksi dan berkolaborasi dengan keluarga, relawan, petugas medis, dan pihak berwenang.

Memetakan lokasi penampakan terakhir ODGJ menggunakan GPS/maps. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseOne">
                        Bagaimana cara mendaftar pasien di Sosial-Hub?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body text-start">
                        <p> 1. Isi formulir pasien. </p>
                        <p> 2. Pastikan sudah terdaftar sebagai pasien Sosial-Hub. </p>
                        <p> 3. Keluarga bisa melihat Daftar Pasien pada halaman Data Pasien. </p>
                        {{-- <p> 4. Silahkan menghadap petugas perpustakaan, dan lakukan transaksi peminjaman. </p> --}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Bagaimana cara mencari Data Pasien?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body text-start">
                        <p> 1. Buka Halaman Data Pasien. </p>
                        <p> 2. Silahkan Cari dengan cara scan barcode pasien melalui Google Lens atau aplikasi scanner. </p>
                        <p> 3. Kemudian salin dan tempel hasil code barcode. </p>
                        <p> 4. Setelah menemukan data pasien hubungi admin melalui media sosial yang ada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
