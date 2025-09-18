@extends('dashboard.layouts.main')

@section('container')
    <style>
        .card {
            background-image: linear-gradient(to right, rgba(243, 238, 238, 0), rgb(76, 121, 255));
        }
    </style>
    <div class="container py-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card text-white mb-3" style="background-color: #1ca7acff;">
            <div class=" card-header">Pilih Tanggal Yang Akan Di Cetak</div>
            <div class="card-body">
            </div>
            <form method="post" action="{{ url('/dashboard/reports/confirm/transactions') }}">
                @csrf
                <div class="row">
                    <div class="col-2">
                        <div class="col">
                            <p class="mb-0">Tanggal Awal</p>
                        </div>
                        <input type="date" class="form-control" id="kembali" name="tgl_awal" value="{{ $dateawal }}"
                            min="{{ $dateawal }}" max="{{ $dateakhir }}">
                    </div>
                    <div class="col-2">
                        <div class="col">
                            <p class="mb-0">Tanggal Akhir</p>
                        </div>
                        <input type="date" class="form-control" id="kembali" name="tgl_akhir" value="{{ $dateawal }}"
                            min="{{ $dateawal }}" max="{{ $dateakhir }}">
                    </div>

                    <div class="col-2">
                        <div class="col">
                            <p class="mb-4"></p>
                        </div>
                        <button class="btn btn-primary" type="submit">Cetak</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
