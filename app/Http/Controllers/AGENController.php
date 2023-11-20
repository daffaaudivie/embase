<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agen;

class AGENController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agen = agen::all();
        return view ('agen.agen',compact('agen'));
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
       $save = new agen;
       $save->nama_agen = $request->nama_agen;
       $save->nomor_agen = $request->nomor_agen;
       $save->alamat = $request->alamat;
       $save->save();

        return "Berhasil Menyimpan Data";
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = agen::all()->where('id', $request->id)->first();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = agen::all()->where('id', $request->id)->first();
        $data->nama_agen = $request->nama_agen;
        $data->nomor_agen = $request->nomor_agen;
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
        $del = agen::all()->where('id', $request->id)->first();
        $del->delete();
        return "Berhasil Menghapus Data";
    }
}
