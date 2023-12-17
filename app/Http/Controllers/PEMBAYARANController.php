<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PEMBAYARANController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $status = $request->input('filterStatus', 'all');

        // Fetch payments based on the selected status
        if ($status && in_array($status, ['Sudah Dibayar', 'Belum Dibayar'])) {
            $pembayaran = Pembayaran::where('status', $status)->get();
        } else {
            // If no status is selected or the selected status is invalid, show all payments
            $pembayaran = Pembayaran::all();
        }

        return view('pembayaran.pembayaran', compact('pembayaran', 'status'));
    }

    public function filterPembayaran(Request $request)
{
    $status = $request->input('filterStatus', 'all');
    
    // Fetch payments based on the selected status
    if ($status && in_array($status, ['Sudah Dibayar', 'Belum Dibayar'])) {
        $pembayaran = Pembayaran::where('status', $status)->get();
    } else {
        // If no status is selected or the selected status is invalid, show all payments
        $pembayaran = Pembayaran::all();
    }
    
    return view('pembayaran.pembayaran', compact('pembayaran', 'status'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembayaran.pembayaran_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_petugas' => 'required',
            'id_pangkalan' => 'required',
            'id_transaksi' => 'required',
            'harga_total' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);

        Pembayaran::create([
            'id_petugas' => $request->id_petugas,
            'id_pangkalan' => $request->id_pangkalan,
            'id_transaksi' => $request->id_transaksi,
            'harga_total' => $request->harga_total,
            'status' => $request->status,
            'date' => $request->date,
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        return view('pembayaran.pembayaran_edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_petugas' => 'required',
            'id_pangkalan' => 'required',
            'id_transaksi' => 'required',
            'harga_total' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update([
            'id_petugas' => $request->id_petugas,
            'id_pangkalan' => $request->id_pangkalan,
            'id_transaksi' => $request->id_transaksi,
            'harga_total' => $request->harga_total,
            'status' => $request->status,
            'date' => $request->date,
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Berhasil Mengupdate Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();

        return redirect()->route('pembayaran.index')->with('success', 'Berhasil Menghapus Data');
    }

    /**
     * Update status pembayaran.
     */
    public function updateStatus(Request $request, $id)
    {
        $pembayaran = Pembayaran::find($id);

        if (!$pembayaran) {
            return redirect()->route('pembayaran.index')->with('error', 'Pembayaran not found');
        }

        $pembayaran->status = $request->status;
        $pembayaran->save();

        return redirect()->route('pembayaran.index')->with('success', 'Status berhasil diperbarui');
    }
}
