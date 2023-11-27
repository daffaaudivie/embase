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
</style>

<div class="container mt-6">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 27px;">Data Pangkalan</h1>
        </div>
    </div>

    <!-- Menambahkan kelas untuk container tabel -->
    <div class="table-container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pangkalan</th>
                    <th>Nomor HP</th>
                    <th>Alamat Pangkalan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pangkalan as $index => $baris)
                    <tr class="{{ $index % 2 == 1 ? 'table-success' : 'table-light' }}">
                        <td>{{ $baris->id }}</td>
                        <td>{{ $baris->nama_pangkalan }}</td>
                        <td>{{ $baris->nomor_pangkalan }}</td>
                        <td>{{ $baris->alamat }}</td>
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

    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <a class="btn btn-success" href="{{ route('pangkalan.create') }}">Tambah Data</a>
        </div>
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
