@extends('layout.app')

@section('title', 'Data Petugas')

<div class="container mt-6">
    <div class="row">
        <div class="col-md-12 text-center"> <!-- Use the full width for the heading and center it -->
            <h1 style="font-size: 27px;">DATA PETUGAS</h1>
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
                <th>Aksi</th> <!-- Tambahkan kolom Aksi -->
            </tr>
        </thead>
        <!-- Inside your table body -->
<tbody>
    @foreach($data as $index => $baris)
        <tr class="{{ $index % 2 == 0 ? 'table-success' : 'table-light' }}">
            <td>{{ $baris['id'] }}</td>
            <td>{{ $baris['nama_petugas'] }}</td>
            <td>{{ $baris['nomor_petugas'] }}</td>
            <td>{{ $baris['alamat'] }}</td>
            <td>
                <a href="{{ route('data.edit', $baris['id']) }}" class="btn btn-warning text-white">Edit</a>
                <!-- Form for handling delete -->
                <form action="{{ route('petugas.destroy', $baris['id']) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

    </table>

    <div class="row mt-3">
        <div class="col-md-12 text-right"> <!-- Align the button to the right -->
            <a class="btn btn-success" href="{{ route('data.create') }}">Tambah Data</a>
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
