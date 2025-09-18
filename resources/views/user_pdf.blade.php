<!DOCTYPE html>
<html>

<head>
    <title>Laporan Petugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
         {{-- table {
            width: 100%;
            border-collapse: collapse; --}}
        }
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        .signature {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 12px;
        }
    </style>

     <table>
        <thead>
            <tr>
                <th colspan="2">Laporan Data Petugas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama Lembaga</td>
                <td>: Sosial Hub</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: Jl. Menuju Kebaikan No. 38114</td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>: (021) 12345678</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($users as $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->jabatan }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>{{ $user->no_tlp }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="signature">
        <h6><strong>TTD:</strong>{{ Auth::user()->nama }}</h6>
    </div>
</body>
</html>
