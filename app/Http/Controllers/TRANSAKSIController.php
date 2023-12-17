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
     * Display a listing of the resource for pengiriman.
     */
    public function pengiriman()
    {
        $transaksiForPengiriman = Transaksi::all();
        return view('pengiriman.pengiriman', compact('transaksiForPengiriman'));
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

        Transaksi::create([
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
        $transaksi = Transaksi::findOrFail($id);

        return view('transaksi.transaksi_edit', compact('transaksi'));
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

        $transaksi = Transaksi::findOrFail($id);

        $transaksi->update([
            'id_petugas' => $request->id_petugas,
            'id_pangkalan' => $request->id_pangkalan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'date' => $request->date,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Berhasil Mengupdate Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Berhasil Menghapus Data');
    }

    /**
     * Update status pengiriman.
     */
     public function updateStatusPengiriman($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        if (!$transaksi) {
            return redirect()->route('transaksi.pengiriman')->with('error', 'Transaksi not found');
        }

        // Lakukan pengecekan status dan update status pengiriman sesuai kondisi
        if ($transaksiForPengiriman->status_pengiriman == 'Siap Dikirim') {
            $transaksiForPengiriman->update(['status_pengiriman' => 'Dalam Pengiriman']);
            return redirect()->route('transaksi.pengiriman')->with('success', 'Status Pengiriman berhasil diubah');
        } else {
            return redirect()->route('transaksi.pengiriman')->with('error', 'Status Pengiriman tidak dapat diubah');
        }
    }

}
