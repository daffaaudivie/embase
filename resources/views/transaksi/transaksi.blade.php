<!-- resources\views\nama_view.blade.php -->

@extends('layout.app')

@section('title', 'Data Transaksi')

<style>
    .mt-6 {
        margin-top: 1.5rem;
    }

    .table-container {
        margin-top: 1.5rem;
    }
</style>

<div class="container mt-6">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 27px;">Data Transaksi</h1>
        </div>
    </div>

    <div class="table-container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Petugas</th>
                    <th>Nama Pangkalan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-success' : 'table-light' }}">
                        <td>{{ $baris->id }}</td>
                        <td>{{ $baris->petugas->nama_petugas}}</td>
                        <td>{{ $baris->pangkalan->nama_pangkalan  }}</td>
                        <td>{{ $baris->jumlah }}</td>
                        <td>{{ $baris->harga }}</td>
                        <td>{{ $baris->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <a class="btn btn-success" href="{{ route('transaksi.create') }}">Tambah Data</a>
        </div>
    </div>
</div>

<script>
    function hapusData(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data?")) {
            alert("Data dengan ID " + id + " berhasil dihapus.");
        }
    }
</script>
