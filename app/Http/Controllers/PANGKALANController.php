<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pangkalan;

class PANGKALANController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pangkalan = Pangkalan::all();
        return view('pangkalan.pangkalan', compact('pangkalan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pangkalan.pangkalan_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pangkalan' => 'required',
            'nomor_pangkalan' => 'required',
            'alamat' => 'required',
        ]);

        Pangkalan::create([
            'nama_pangkalan' => $request->nama_pangkalan,
            'nomor_pangkalan' => $request->nomor_pangkalan,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('pangkalan.index')->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Pangkalan = Pangkalan::findOrFail($id);

        return view('pangkalan.pangkalan_edit', compact('Pangkalan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pangkalan' => 'required',
            'nomor_pangkalan' => 'required',
            'alamat' => 'required',
        ]);

        $Pangkalan = Pangkalan::findOrFail($id);

        $Pangkalan->update([
            'nama_pangkalan' => $request->nama_pangkalan,
            'nomor_pangkalan' => $request->nomor_pangkalan,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('pangkalan.index')->with('success', 'Berhasil Mengupdate Data');
    }
    public function destroy($id)
    {
    $pangkalan = Pangkalan::findOrFail($id);
    $pangkalan->delete();

    return redirect()->route('pangkalan.index')->with('success', 'Berhasil Menghapus Data');
    }

    // ... other methods ...
}
