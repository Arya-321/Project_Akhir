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
        $wisata = DB::table('table_wisata')->get();
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
            $fileName = 'foto' . $request->id . '.' . $request->foto->extension();
            $request->foto->move(public_path('admin/image'), $fileName);
        } else {
            $fileName = '';
        }
        DB::table('table_wisata')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'deksripsi' => $request->deksripsi,
            'alamat' => $request->alamat,
            'foto' => $fileName,


        ]);
        return redirect('admin/wisata');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $wisata = DB::table('table_wisata')->where('id', $id)->get();

        return view('admin.wisata.detail', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $wisata = DB::table('table_wisata')->where('id', $id)->get();

        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        if (!empty($request->foto)) {
            $fileName = 'foto' . $request->id . '.' . $request->foto->extension();
            $request->foto->move(public_path('admin/image'), $fileName);
        } else {
            $fileName = '';
        }
        DB::table('table_wisata')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'deksripsi' => $request->deksripsi,
            'alamat' => $request->alamat,
            'foto' => $fileName,
        ]);
        //ketika selesai mengupdate maka arahkan ke halaman admin divisi index
        return redirect('admin/wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        DB::table('table_wisata')->where('id', $id)->delete();
        return redirect('admin/wisata');
    }
}
