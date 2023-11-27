@extends('layout.app')

@section('title', 'Data Pangkalan')


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto"> <!-- Menggunakan mx-auto untuk tengah secara horizontal -->
                <h1 class="text-center mb-4">Tambah Data Pangkalan</h1>
                <form method="POST" action="{{ route('pangkalan.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama_pangkalan" class="col-sm-2 col-form-label">Nama Pangkalan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_pangkalan" name="nama_pangkalan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nomor_pangkalan" class="col-sm-2 col-form-label">Nomor Pangkalan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomor_pangkalan" name="nomor_pangkalan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        <div class="mt-4 text-center"> <!-- Pusatkan alert secara horizontal -->
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                Data berhasil ditambahkan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script>
        // Menangani alert ketika form disubmit
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function() {
                document.getElementById('success-alert').style.display = 'block';
            });
        });
    </script>

