@extends('layout.app')

@section('title', 'Data Petugas')

@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-12 text-center"> <!-- Use the full width for the heading and center it -->
                <h1>Data Petugas</h1>
            </div>
        </div>

        <!-- Tabel dengan kelas Bootstrap -->
        <table class="table table-bordered mx-auto">
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
                @foreach($data as $index => $baris)
                <tr class="{{ $index % 2 == 0 ? 'table-success' : 'table-light' }}">
                    <td>{{ $baris['id'] }}</td>
                    <td>{{ $baris['nama_petugas'] }}</td>
                    <td>{{ $baris['nomor_petugas'] }}</td>
                    <td>{{ $baris['alamat'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row mt-3">
            <div class="col-md-12 text-right"> <!-- Align the button to the right -->
                <a class="btn btn-success" href="#">Tambah Data</a>
            </div>
        </div>
    </div>
@endsection
