<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\DB;


class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pengunjung = DB::table('pengunjung')->get();
        return view('admin.pengunjung.index',compact('pengunjung'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //arahkan ke file create
        return view('admin.pengunjung.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //fungsi untuk mengisi data pada form
        DB::table('pengunjung')->insert([
            'id' => $request->id,
            'namaPengunjung' => $request->namaPengunjung,
            'email' => $request->email,
            'noHP' => $request->noHP,
            'alamat' => $request->alamat,
        ]);
        return redirect('admin/pengunjung');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $pengunjung = DB::table('pengunjung')->where('id', $id)->get();

        return view ('admin.pengunjung.detail', compact('pengunjung'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //arahakn ke file edit yang ada didivisi view
        $pengunjung = DB::table('pengunjung')->where('id', $id)->get();

        return view('admin.pengunjung.edit', compact('pengunjung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat proses edit form
        DB::table('pengunjung')->where('id', $request->id)->update([
            'namaPengunjung' => $request->namaPengunjung,
            'email' => $request->email,
            'noHp' => $request->noHp,
            'alamat' => $request->alamat,
        ]);
        //ketika selesai mengupdate maka arahkan ke halaman admin divisi index
        return redirect('admin/pengunjung');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('pengunjung')->where('id', $id)->delete();
        return redirect('admin/pengujung');
    }
}
