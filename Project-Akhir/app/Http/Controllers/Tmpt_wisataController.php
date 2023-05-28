<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmpt_wisata;
use Illuminate\Support\Facades\DB;

class Tmpt_wisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rating = DB::table('tmpt_wisata')->get();
        return view('admin.tmpt_wisata.index', compact('tmpt_wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tmpt_wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('tmpt_wisata')->insert([
            'id' => $request->id,
            'namatmpt_wisata' => $request->namatmpt_wisata,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'alamat' => $request->alamat,
        ]);
        return redirect('admin/tmpt_wisata');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tmpt_wisata = DB::table('tmpt_wisata')->where('id', $id)->get();

        return view('admin.tmpt_wisata.detail', compact('tmpt_wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tmpt_wisata = DB::table('tmpt_wisata')->where('id', $id)->get();

        return view('admin.tmpt_wisata.edit', compact('tmpt_wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //buat proses edit form
        DB::table('tmpt_wisata')->where('id', $request->id)->update([
            'namatmpt_wisata' => $request->namatmpt_wisata,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'alamat' => $request->alamat,
        ]);
        //ketika selesai mengupdate maka arahkan ke halaman admin divisi index
        return redirect('admin/tmpt_wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
