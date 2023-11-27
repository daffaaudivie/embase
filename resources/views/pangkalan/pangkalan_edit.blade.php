@extends('layout.app')

@section('title', 'Edit Data Pangkalan')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto"> <!-- Menggunakan mx-auto untuk tengah secara horizontal -->
            <h1 class="text-center mb-4">Edit Data Pangkalan</h1>
            <form method="POST" action="{{ route('pangkalan.update', $Pangkalan->id) }}">
    @csrf
    @method('PUT') <!-- Menambahkan metode PUT untuk metode update -->

    <div class="row mb-3">
        <label for="nama_pangkalan" class="col-sm-2 col-form-label">Nama Pangkalan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_pangkalan" name="nama_pangkalan" value="{{ $Pangkalan->nama_pangkalan }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="nomor_pangkalan" class="col-sm-2 col-form-label">Nomor Pangkalan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomor_pangkalan" name="nomor_pangkalan" value="{{ $Pangkalan->nomor_pangkalan }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $Pangkalan->alamat }}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

        </div>
    </div>
</div>

<div class="mt-4 text-center"> <!-- Pusatkan alert secara horizontal -->
    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
        Data berhasil diubah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

<!-- Fungsi JavaScript untuk menangani alert ketika form disubmit -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');

        form.addEventListener('submit', function() {
            document.getElementById('success-alert').style.display = 'block';
        });
    });
</script>
