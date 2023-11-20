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
        $data = pangkalan::all();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $save = new pangkalan;
       $save->nama_pangkalan = $request->nama_pangkalan;
       $save->nomor_pangkalan = $request->nomor_pangkalan;
       $save->alamat = $request->alamat;
       $save->save();

        return "Berhasil Menyimpan Data";
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = pangkalan::find($request->id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = pangkalan::find($request->id);
        $data->nama_pangkalan = $request->nama_pangkalan;
        $data->nomor_pangkalan = $request->nomor_pangkalan;
        $data->alamat = $request->alamat;
        $data->save();

        return "Berhasil Mengubah Data";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = pangkalan::find($id);
        $data->nama_pangkalan = $request->nama_pangkalan;
        $data->nomor_pangkalan = $request->nomor_pangkalan;
        $data->alamat = $request->alamat;
        $data->save();

        return "Berhasil Memperbarui Data";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = Pangkalan::find($id);
        $del->delete();
        return "Berhasil Menghapus Data";
    }
}
