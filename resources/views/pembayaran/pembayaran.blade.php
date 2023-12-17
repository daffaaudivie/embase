<!-- resources\views\nama_view.blade.php -->

@extends('layout.app')

@section('title', 'Data Pembayaran')

<style>
    .mt-6 {
        margin-top: 1.5rem;
    }

    .table-container {
        margin-top: 1.5rem;
    }

    /* Tambahkan gaya untuk tombol */
    .btn-container {
        display: flex;
        gap: 5px; /* Jarak antar tombol */
    }

    /* Set the width for both buttons */
    .btn-container button {
        width: 45px; /* Adjust the width as needed */
    }

    /* Gaya untuk filter */
    .filter-container {
        display: flex;
        gap: 5px;
        justify-content: flex-start; /* Set rata kiri */
        margin-top: 1rem; /* Beri jarak atas jika diperlukan */
    }

    .filter-container select {
        width: 200px; /* Adjust the width as needed */
    }

    .filter-container button {
        padding: 5px 10px; /* Adjust padding for a smaller size */
    }
</style>

<div class="container mt-6">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 27px;">Data Pembayaran</h1>
        </div>
    </div>

    <!-- resources\views\nama_view.blade.php -->

<!-- ... (kode sebelumnya) ... -->

<div class="filter-container">
    <form action="{{ route('filterPembayaran') }}" method="GET">
        <div class="form-group">
            <label for="filterStatus">Filter Status:</label>
            <select name="filterStatus" id="filterStatus" class="form-control">
                <option value="all" {{ $status === 'all' ? 'selected' : '' }}>Show All</option>
                <option value="Sudah Dibayar" {{ $status === 'Sudah Dibayar' ? 'selected' : '' }}>Sudah Dibayar</option>
                <option value="Belum Dibayar" {{ $status === 'Belum Dibayar' ? 'selected' : '' }}>Belum Dibayar</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>
</div>

<!-- ... (kode selanjutnya) ... -->

    <div class="table-container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Petugas</th>
                    <th>Nama Pangkalan</th>
                    <!-- <th>ID Transaksi</th> -->
                    <th>Harga Total</th>
                    <th>Status</th>
                    <th>Konfirmasi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayaran as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-success' : 'table-light' }}">
                        <td>{{ $baris->id }}</td>
                        <td>{{ $baris->petugas->nama_petugas }}</td>
                        <td>{{ $baris->pangkalan->nama_pangkalan }}</td>
                        <!-- <td>{{ $baris->id_transaksi }}</td> -->
                        <td>{{ $baris->harga_total }}</td>
                        <td>{{ $baris->status }}</td>
                        
                        <td class="btn-container"> <!-- Gunakan div atau flexbox untuk tombol -->
                            <form action="{{ route('updateStatus', $baris->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="Sudah Dibayar">
                                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda yakin ingin mengubah status menjadi Sudah Dibayar?')">✔</button>
                            </form>
                            <form action="{{ route('updateStatus', $baris->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="Belum Dibayar">
                                <button type="submit" class="btn btn-warning" onclick="return confirm('Apakah Anda yakin ingin mengubah status menjadi Belum Dibayar?')">X </button>
                            </form>
                        </td>
                        <td>{{ $baris->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function hapusData(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data?")) {
            alert("Data dengan ID " + id + " berhasil dihapus.");
        }
    }
</script>
