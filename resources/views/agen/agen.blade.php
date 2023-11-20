<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Agen</title>
    <!-- Menambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #d355d3; /* Warna hijau muda */
        }

        .container {
            background-color: #ffffff; /* Warna putih */
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .table th, .table td {
            text-align: center;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #c1f3c1; /* Warna hijau muda untuk baris ganjil */
        }

        .btn-primary {
            background-color: #55a0d3; /* Warna biru muda untuk tombol tambah data */
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Data Agen</h1>
        <p><a class="btn btn-primary" href="#">Tambah Data</a></p>
        
        <!-- Tabel dengan kelas Bootstrap -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menggunakan blade directive untuk loop data -->
                @foreach($agen as $baris)
                <tr>
                    <td>{{ $baris['id'] }}</td>
                    <td>{{ $baris['nama_agen'] }}</td>
                    <td>{{ $baris['nomor_agen'] }}</td>
                    <td>{{ $baris['alamat'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Menambahkan Bootstrap JavaScript dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
