<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PETUGASController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Petugas::all();
        return view('data.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.data_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_petugas' => 'required',
            'nomor_petugas' => 'required',
            'alamat' => 'required',
        ]);

        Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'nomor_petugas' => $request->nomor_petugas,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('petugas.index')->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);

        return view('data.data_edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_petugas' => 'required',
            'nomor_petugas' => 'required',
            'alamat' => 'required',
        ]);

        $petugas = Petugas::findOrFail($id);

        $petugas->update([
            'nama_petugas' => $request->nama_petugas,
            'nomor_petugas' => $request->nomor_petugas,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('petugas.index')->with('success', 'Berhasil Mengupdate Data');
    }
    public function destroy($id)
    {
    $petugas = Petugas::findOrFail($id);
    $petugas->delete();

    return redirect()->route('petugas.index')->with('success', 'Berhasil Menghapus Data');
    }

    // ... other methods ...
}
