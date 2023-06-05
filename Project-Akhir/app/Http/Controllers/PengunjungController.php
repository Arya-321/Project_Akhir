<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pengunjung = DB::table('table_pengunjung')->get();
        return view('admin.pengunjung.index', compact('pengunjung'));
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
        $hashedPassword = md5($request->password);

    DB::table('table_pengunjung')->insert([
        'nama' => $request->nama,
        'username' => $request->username,
        'jk' => $request->jk,
        'password' => $hashedPassword,
        'nohp' => $request->nohp,
        'email' => $request->email,
        'alamat' => $request->alamat,
        
    ]);
    Alert::success('Pengunjung', 'Berhasil menambahkan data pengunjung');
    return redirect('admin/pengunjung');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $pengunjung = DB::table('table_pengunjung')->where('id', $id)->get();
        return view ('admin.pengunjung.detail', compact('pengunjung'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //arahakn ke file edit yang ada didivisi view
        $pengunjung= DB::table('table_pengunjung')->where('id', $id)->get();
        return view('admin.pengunjung.edit', compact('pengunjung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat proses edit form
        $hashedPassword = md5($request->password);

    DB::table('table_pengunjung')->where('id', $request->id)->update([
        'nama' => $request->nama,
        'username' => $request->username,
        'jk' => $request->jk,
        'password' => $hashedPassword,
        'nohp' => $request->nohp,
        'email' => $request->email,
        'alamat' => $request->alamat,
    ]);
    Alert::info('Pengunjung', 'Berhasil Mengedit pengunjung');
    return redirect('admin/pengunjung');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
        //
        DB::table('table_pengunjung')->where('id', $id)->delete();
        Alert::info('Pengunjung', 'Berhasil Menghapus data pengunjung');
        return redirect('admin/pengunjung');
    }
}
