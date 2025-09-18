@extends('landing.layouts.main')

@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<div class="container py-5 mt-4">
    <!-- Bagian Gambar dan Tentang Kami -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{ asset('storage/images/fit1.jpg') }}" class="img-fluid" alt="Fasilitas 1"
                                    style="width:100%; height:362px; object-fit:cover;">
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{ asset('storage/images/fit2.webp') }}" class="img-fluid" alt="Fasilitas 2"
                                    style="width:100%; height:350px; object-fit:cover;">
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>

                        <div class="col-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{ asset('storage/images/fit3.webp') }}" class="img-fluid" alt="Fasilitas 3"
                                    style="width:100%; height:300px; object-fit:cover;">
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
            <div class="section-title ml-lg-5">
                <h5 class="text-custom font-weight-normal mb-3">Tentang Kami</h5>
                <h4 class="title mb-4">
                    Sosial-Hub <br>
                    Sistem Informasi Kehilangan Orang Berkebutuhan Khusus
                </h4>

                <p>Berdasarkan Peraturan Menteri Kesehatan RI No. 72 Tahun 2020 tentang Organisasi dan Tata Kerja
                    Rumah Sakit Dr. Radjiman Wediodiningrat Lawang, rumah sakit ini merupakan unit organisasi di bawah
                    Kementerian Kesehatan dan bertanggung jawab langsung kepada Direktur Jenderal Pelayanan Kesehatan.</p>

                <p>Rumah Sakit Dr. Radjiman Wediodiningrat Lawang mempunyai tugas melaksanakan upaya kesehatan jiwa
                    secara berdayaguna dan berhasil guna melalui:</p>

                <ol>
                    <li>Pelayanan kesehatan jiwa pencegahan (preventif)</li>
                    <li>Pelayanan kesehatan jiwa pemulihan (kuratif)</li>
                    <li>Pelayanan kesehatan jiwa rehabilitasi</li>
                    <li>Pelayanan kesehatan jiwa masyarakat</li>
                    <li>Sistem rujukan (referal)</li>
                </ol>

                <!-- <a href="#visimisi" class="btn btn-outline-primary btn-lg mx-1">Visi dan Misi</a> -->
                {{-- <a href="#struktur" class="btn btn-outline-primary btn-lg mx-1">Struktur Organisasi</a> --}}
                {{-- <a href="#kontak" class="btn btn-outline-primary btn-lg mx-1">Kontak dan Lokasi</a> --}}
            </div>
        </div>
    </div>

    <!-- Bagian Visi dan Misi -->
    <div class="row pb-0 align-items-center rounded-3 border shadow-lg mb-5" id="visimisi">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h4 class="title mb-3">Visi dan Misi</h4>

            <h5 class="title mt-3">Visi</h5>
            <p>“Sosial-Hub bertujuan untuk menciptakan lingkungan yang inklusif dan aman bagi orang dengan disabilitas
                dan kebutuhan khusus. Kami berkomitmen membantu menemukan individu yang hilang dari pengawasan orang
                terdekat dengan menggunakan teknologi dan kolaborasi komunitas.”</p>

            <h5 class="title mt-3">Misi</h5>
            <p><strong>1. Pencarian dan Pelacakan:</strong> Mengembangkan alat pelacakan yang efisien dan akurat
                untuk menemukan individu yang hilang. Mendorong partisipasi aktif masyarakat dalam pencarian dan pelacakan.</p>
            <p><strong>2. Kesadaran dan Edukasi:</strong> Mengedukasi masyarakat tentang keselamatan individu dengan
                disabilitas dan kebutuhan khusus, serta menyebarkan informasi tindakan pencegahan dan respons darurat.</p>
            <p><strong>3. Kemitraan dengan Lembaga Terkait:</strong> Bekerja sama dengan lembaga penegak hukum,
                organisasi sosial, dan keluarga untuk meningkatkan efektivitas pencarian. Membangun jaringan berbagi
                informasi dan sumber daya.</p>
            <p><strong>4. Teknologi dan Inovasi:</strong> Menggunakan teknologi terkini seperti GPS map, sensor, dan
                aplikasi seluler untuk mempercepat proses pelacakan. Mengembangkan platform mudah diakses bagi
                pengguna dengan berbagai jenis disabilitas.</p>

            <p>Dengan visi dan misi ini, Sosial-Hub berupaya menjadi solusi tanggap dan berdaya guna dalam membantu
                menemukan individu yang hilang dan memastikan keselamatan mereka.</p>
        </div>

        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-start" src="{{ asset('storage/images/bg3.jpg') }}" alt="Visi Misi"
                style="width:100%; height:500px; object-fit:cover;">
        </div>
    </div>

    <!-- Struktur Organisasi dan Kontak (opsional, bisa diaktifkan nanti) -->
</div>
@endsection
