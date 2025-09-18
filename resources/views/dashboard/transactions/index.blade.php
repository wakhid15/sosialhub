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
            <div class=" card-header" style="color: white">Data Kehilangan</div>

            <a href="{{ url('/dashboard/transactions/create') }}" class="btn btn-lg btn-primary">Tambah Data Kehilangan</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Nama Keluarga</th>
                        {{-- <th scope="col">Tanggal Peminjaman</th> --}}
                        <th scope="col">Tanggal Hilang</th>
                        <th scope="col">Tanggal Ketemu</th>
                        <th scope="col">Status</th>
                        {{-- <th scope="col">Denda</th> --}}
                        {{-- <th scope="col">Jumlah Pinjam</th>
                        <th scope="col">Jumlah Hari</th> --}}
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a = 1; ?>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $a++ }}</td>
                            <td>{{$transaction->book->judul ?? 'None'}}</td>
                            <td>{{ $transaction->user->nama ?? 'None' }}</td>
                            <td>{{ $transaction->member->jns_anggota ?? 'None' }}</td>
                            {{-- <td>{{ $transaction->tgl_pinjam }}</td> --}}
                            <td>{{ $transaction->tgl_kembali }}</td>
                            <td>{{ $transaction->tgl_pengembalian }}</td>
                            <td>{{ $transaction->status }}</td>
                            {{-- <td>{{ $transaction->denda }}</td> --}}
                            {{-- <td>{{ $transaction->jml_pinjam }}</td>
                            <td>{{ $transaction->jml_hari }}</td> --}}
                            <td>
                                @if ($transaction->status == 'Hilang')
                                    <a href="{{ url('/dashboard/transactions/' . $transaction->id . '/edit') }}"
                                        class="badge bg-warning border-0">Edit</a>
                                    <form action="{{ url('/dashboard/transactions/createpengembalian') }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" class="form-control" id="hasil" name="id" required readonly
                                            value="{{ $transaction->id }}">
                                        <button class="badge bg-danger border-0">Ketemu</button>
                                    </form>
                                    <form action="{{ url('/dashboard/transactions/' . $transaction->id) }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0"
                                            onclick="return confirm('Anda Yakin?')">Hapus</button>
                                    </form>
                                @else
                                    <a href="{{ url('/dashboard/transactions/' . $transaction->id . '/edit') }}"
                                        class="badge bg-warning border-0">Edit</a>

                                    <form action="{{ url('/dashboard/transactions/' . $transaction->id) }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0"
                                            onclick="return confirm('Anda Yakin?')">Hapus</button>
                                    </form>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
