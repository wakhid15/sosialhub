@extends('dashboard.layouts.main')

@section('container')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class=""
                        width="150px" src="{{ asset('storage/' . $user->nama_gambar) }}"><span
                        class="font-weight-bold">{{ $user->nama }}</span><span
                        class="text-black-50">{{ $user->jabatan }}</span><span>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profilku</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col"><label class="labels">Nama Lengkap</label><input type="text"
                                class="form-control" value="{{ $user->nama }}" readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Jabatan</label><input type="text"
                                class="form-control" value="{{ $user->jabatan }}" readonly></div>

                        <div class="col-md-12 mt-2"><label class="labels">Alamat</label><input type="text"
                                class="form-control" value="{{ $user->alamat }}" readonly></div>

                        <div class="col-md-12 mt-2"><label class="labels">Nomor Telepon</label><input type="text"
                                class="form-control" value="{{ $user->no_tlp }}" readonly></div>

                        <div class="col-md-12 mt-2"><label class="labels">E-mail</label><input type="text"
                                class="form-control" value="{{ $user->email }}" readonly></div>
                        <a href="{{ url('/dashboard/profiles/' . $user->id . '/edit') }}" class="btn mt-3" style="background-color: rgb(26, 202, 179); color: white;">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
