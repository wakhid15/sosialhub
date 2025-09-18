<!DOCTYPE html>
<html>

<head>
    <title>Laporan Anggota Keluarga</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6; /* Menambah garis kanan */
        }

        th {
            background-color: #f2f2f2;
        }

        .signature {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 12px;
        }

        .logo {
            width: 100px; /* Sesuaikan lebar logo dengan kebutuhan Anda */
            height: auto; /* Biarkan ketinggian otomatis menyesuaikan proporsi */
        }

        /* Menghilangkan garis kanan pada kolom terakhir */
        table th:last-child,
        table td:last-child {
            border-right: none;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="2">Laporan Data Keluarga Pasien</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama Lembaga</td>
                <td>Sosial Hub</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Jl. Menuju Kebaikan No. 38114</td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>(021) 12345678</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Anggota Keluarga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->tmpt_lahir }}</td>
                    <td>{{ $member->tgl_lahir }}</td>
                    <td>{{ $member->jns_kelamin }}</td>
                    <td>{{ $member->alamat }}</td>
                    <td>{{ $member->no_hp }}</td>
                    <td>{{ $member->jns_anggota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="signature">
        <h6><strong>TTD:</strong>{{ Auth::user()->nama }}</h6>
    </div>
</body>
</html>
