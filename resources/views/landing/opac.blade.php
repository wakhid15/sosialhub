@extends('landing.layouts.main')

@section('container')
    <section class="mt-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 py-5 col-md-8 mx-auto">
                <h1 class="font-weight-normal">Data Pasien</h1>
                <p class=" text-muted">Jelajahi fitur ini dengan menggunakan fitur cari nama pasien </p>
                <p>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col">
                            <div>
                                <p>Cari berdasarkan kategori pasien</p>
                            </div>
                        </div>
                    </div>
                    <form action="/opac">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control text-white" placeholder="Cari..." name="search"
                                value="{{ request('search') }}" autofocus>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </form>

                    <a class="btn btn-warning" href="/opac/barcode"><i class="bi bi-search"> Scan Barcode</i></a>

                </div>
                </p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <h1 class="fw-light text-center">kosong</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                            src="{{ asset('storage/images/fit1.jpg') }}">
                        </img>
                        <div class="card-body">
                            <p class="card-text">Kosong</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <form action="/opac/paket" method="post" class="d-inline">
                                    @csrf
                                    <input type='hidden' name='kategori' value="Pasien ">
                                    <button class="btn btn-sm btn-outline-secondary" type="submit">Lihat Pasien</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                            src="{{ asset('storage/images/fit2.jpg') }}">
                        </img>
                        <div class="card-body">
                            <p class="card-text">Kososng</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <form action="/opac/paket" method="post" class="d-inline">
                                    @csrf
                                    <input type='hidden' name='kategori' value="Pasien">
                                    <button class="btn btn-sm btn-outline-secondary">Lihat Pasien</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                            src="{{ asset('storage/images/fit3.jpg') }}">
                        </img>
                        <div class="card-body">
                            <p class="card-text">Kosong</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <form action="/opac/paket" method="post" class="d-inline">
                                    @csrf
                                    <input type='hidden' name='kategori' value="Pasien">
                                    <button class="btn btn-sm btn-outline-secondary">Lihat Pasien</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <h1 class="fw-light text-center mt-5">Daftar Pasien</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kategori Rak</th>
                            <th scope="col">Judul Pasien</th>
                            <th scope="col">Barcode</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Eksemplar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($books as $key => $book)
                                <td>{{ $books->firstItem() + $key }}</td>
                                <td>{{ $book->rak->kategori ?? 'None' }}</td>
                                <td>{{ $book->judul }}</td>
                                <td> {!! DNS1D::getBarcodeSVG($book->no_barcode, 'EAN13', 3, 70) !!}</td>
                                <td>{{ $book->pengarang }}</td>
                                <td>{{ $book->penerbit }}</td>
                                <td>{{ $book->thn_terbit }}</td>
                                <td>{{ $book->eksemplar }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $books->links() }} </div>
            </div>
        </div>
    </div>
    </div>
@endsection
