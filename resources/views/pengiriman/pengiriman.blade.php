<!-- resources\views\pengiriman.blade.php -->

@extends('layout.app')

@section('title', 'Data Pengiriman')

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
            <h1 style="font-size: 27px;">Data Pengiriman</h1>
        </div>
    </div>

    <div class="table-container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Petugas</th>
                    <th>Nama Pangkalan</th>
                    <th>Status Pengiriman</th>
                    <th>Aksi</th> <!-- Tambahkan kolom Aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach($transaksiForPengiriman as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-success' : 'table-light' }}">
                        <td>{{ $baris->id }}</td>
                        <td>{{ $baris->petugas->nama_petugas}}</td>
                        <td>{{ $baris->pangkalan->nama_pangkalan  }}</td>   
                        <td>{{ $baris->status_pengiriman}}</td>
                        <td>
                        @if($baris->status_pengiriman === 'Siap Dikirim')
                            <form action="{{ route('pengiriman.updateStatusPengiriman', $baris->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status_pengiriman" value="Dalam Pengiriman">
                                <button type="submit" class="btn btn-success">Kirim LPG</button>
                            </form>
                        @else
                            <span class="text-muted">Status sudah dalam pengiriman</span>
                        @endif
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
