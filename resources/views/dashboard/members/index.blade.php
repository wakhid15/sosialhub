@extends('dashboard.layouts.main')

@section('container')
    <style>
        .card {
            background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(76, 121, 255));
        }
    </style>
    <div class="container py-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card text-white mb-3" style="background-color: #210b81;">
            <div class="card-header" style="color: white">Data Anggota</div>
            <div class="card-body">
                <div class="container mt-3">
                    <div class="row">
                        <div class="col" style="color: white">
                            <div>
                                <p>Cari berdasarkan Nama</p>
                            </div>
                        </div>
                    </div>
                    <form action="{{ url('/dashboard/members') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <a href="{{ url('/dashboard/members/create') }}" class="btn btn-lg btn-primary">Tambah Anggota</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Anggota Keluarga</th>
                        <th scope="col">Foto Pasien</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $key => $member)
                        <tr>
                            <td>{{ $members->firstItem() + $key }}</td>
                            <td>{{ $member->nama }}</td>
                            <td>{{ $member->nisn }}</td>
                            <td>{{ $member->tmpt_lahir }}</td>
                            <td>{{ $member->tgl_lahir }}</td>
                            <td>{{ $member->jns_kelamin }}</td>
                            <td>{{ $member->alamat }}</td>
                            <td>{{ $member->no_hp }}</td>
                            <td>{{ $member->jns_anggota }}</td>
                            <td><img class="" width="100px"
                                    src="{{ asset('storage/' . $member->nama_gambar) }}">
                            </td>
                            <td>
                                <a href="{{ url('/dashboard/members/' . $member->id . '/edit') }}"
                                    class="badge bg-warning border-0">Edit</a>

                                <form action="{{ url('/dashboard/members/print') }}" method="post" class="d-inline" target="_blank">
                                    @csrf
                                    <input type='hidden' name='id' value='{{ $member->id }}'>
                                    <button class="badge bg-primary border-0" onclick="return confirm('Cetak Kartu?')">Cetak
                                        Kartu</button>
                                </form>

                                <form action="{{ url('/dashboard/members/' . $member->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Anda Yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $members->links() }}
        </div>
    </div>
@endsection
