<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Kehilangan</title>
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
                <th colspan="2">Laporan Data Kehilangan</th>
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
                <th scope="col">Nama Pasien</th>
                <th scope="col">Nama Keluarga</th>
                <th scope="col">Nama Petugas</th>
                <th scope="col">Tanggal Kehilangan</th>
                <th scope="col">Tanggal Ketemu</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->book->judul ?? 'None'}}</td>
                <td>{{ $transaction->member->jns_anggota }}</td>
                <td>{{ $transaction->user->nama ?? 'None'}}</td>
                <td>{{ $transaction->tgl_pinjam }}</td>
                <td>{{ $transaction->tgl_pengembalian }}</td>
                <td>{{ $transaction->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="signature">
        <h6><strong>TTD:</strong>{{ Auth::user()->nama }}</h6>
    </div>
</body>
</html>
