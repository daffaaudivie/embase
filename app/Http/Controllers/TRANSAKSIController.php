<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TRANSAKSIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.transaksi', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.transaksi_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_petugas' => 'required',
            'id_pangkalan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'date' => 'required',
        ]);

        Pangkalan::create([
            'id_petugas' => $request->id_petugas,
            'id_pangkalan' => $request->id_pangkalan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'date' => $request->date,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Trasaksi = Trasaksi::findOrFail($id);

        return view('transaksi.transaksi_edit', compact('Transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_petugas' => 'required',
            'id_pangkalan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'date' => 'required',
        ]);

        $Pangkalan = Pangkalan::findOrFail($id);

        $Pangkalan->update([
            'id_petugas' => $request->id_petugas,
            'id_pangkalan' => $request->id_pangkalan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'date' => $request->date,
            
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Berhasil Mengupdate Data');
    }
    public function destroy($id)
    {
    $transaksi = Transaksi::findOrFail($id);
    $transaksi->delete();

    return redirect()->route('transaksi.index')->with('success', 'Berhasil Menghapus Data');
    }

    // ... other methods ...
}
