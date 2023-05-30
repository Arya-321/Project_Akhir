<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;


class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $wisata = DB::table('tempatwisata')->get();
        return view('admin.wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //fungsi untuk mengisi data pada form
        if (!empty($request->foto)) {
            $fileName = 'gambar-' . $request->idTempatWisata . '.' . $request->foto->extension();
            $request->foto->move(public_path('admin/image'), $fileName);
        } else {
            $fileName = '';
        }
        DB::table('tempatwisata')->insert([
            'idTempatWisata' => $request->idTempatWisata,
            'namaTempatWisata' => $request->namaTempatWisata,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'gambar' => $fileName,


        ]);
        return redirect('admin/wisata');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy($id)
    {
        //
        DB::table('tempatwisata')->where('idTempatWisata', $id)->delete();
        return redirect('admin/wisata');
    }
}
