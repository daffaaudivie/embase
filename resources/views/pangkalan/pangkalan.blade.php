@extends('layout.app')

@section('title', 'Data Pangkalan')

<!-- Menambahkan gaya CSS -->
<style>
    .mt-6 {
        margin-top: 1.5rem; /* Sesuaikan nilai margin-top sesuai kebutuhan */
    }

    .table-container {
        margin-top: 1.5rem; /* Sesuaikan nilai margin-top sesuai kebutuhan */
    }

    .table-container table {
        width: 120%; /* Set the table width to 120% */
    }

    .table-container th:nth-child(10), /* Select the 10th column (Alamat) */
    .table-container td:nth-child(10),
    .table-container th:last-child,
    .table-container td:last-child {
        white-space: nowrap; /* Prevent text wrapping */
        max-width: 150px; /* Adjust the maximum width for the last column */
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .table-container th:nth-child(1),
    .table-container td:nth-child(1),
    .table-container th:nth-child(13),
    .table-container td:nth-child(13) {
        max-width: 100px; /* Set the maximum width for ID and Aksi columns */
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .table-container th:nth-child(11), /* Select the 11th column (Aksi) */
    .table-container td:nth-child(11) {
        max-width: 200px; /* Increase the maximum width for the Aksi column */
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .btn-tambah {
        margin-bottom: 1rem; /* Add margin to the bottom of the button */
    }
</style>

<div class="container mt-6">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 27px;">Data Pangkalan</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <a class="btn btn-success btn-tambah" href="{{ route('pangkalan.create') }}">Tambah Data +</a>
        </div>
    </div>

    <!-- Menambahkan kelas untuk container tabel -->
    <div class="table-container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <!-- <th>Kontrak</th>
                    <th>Status</th> -->
                    <th>Nama Provinsi</th>
                    <th>Nama Kota</th>
                    <th>Nama Kecamatan</th>
                    <th>Nama Kelurahan</th>
                    <th>Kode Pos</th>
                    <th>Alamat</th>
                    <th>Tipe Pembayaran</th>
                    <th>Nomor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pangkalan as $index => $baris)
                    <tr class="{{ $index % 2 == 1 ? 'table-success' : 'table-light' }}">
                        <td>{{ $baris->id }}</td>
                        <td>{{ $baris->nama_pangkalan }}</td>
                        <!-- <td>{{ $baris->qty_kontrak }}</td>
                        <td>{{ $baris->status }}</td> -->
                        <td>{{ $baris->nama_provinsi }}</td>
                        <td>{{ $baris->nama_kota }}</td>
                        <td>{{ $baris->nama_kecamatan }}</td>
                        <td>{{ $baris->nama_kelurahan }}</td>
                        <td>{{ $baris->kode_pos }}</td>
                        <td>{{ $baris->alamat }}</td>
                        <td>{{ $baris->tipe_pembayaran }}</td>
                        <td>{{ $baris->nomor_pangkalan }}</td>
                        <td>
                            <a href="{{ route('pangkalan.edit', $baris->id) }}" class="btn btn-warning text-white">Edit</a>
                            <!-- Form for handling delete -->
                            <form action="{{ route('pangkalan.destroy', $baris->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Fungsi JavaScript untuk konfirmasi penghapusan data -->
<script>
    function hapusData(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data?")) {
            // Tambahkan kode untuk mengirimkan permintaan penghapusan data ke server
            alert("Data dengan ID " + id + " berhasil dihapus.");
        }
    }
</script>
