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
        $data = petugas::all();
        return view ('data.data',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $save = new petugas;
       $save->nama_petugas = $request->nama_petugas;
       $save->nomor_petugas = $request->nomor_petugas;
       $save->alamat = $request->alamat;
       $save->save();

        return "Berhasil Menyimpan Data";
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = petugas::all()->where('id', $request->id)->first();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = petugas::all()->where('id', $request->id)->first();
        $data->nama_petugas = $request->nama_petugas;
        $data->nomor_petugas = $request->nomor_petugas;
        $data->alamat = $request->alamat;
        $data->save();

        return "Berhasil Mengubah Data";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = petugas::all()->where('id', $request->id)->first();
        $del->delete();
        return "Berhasil Menghapus Data";
    }
}
