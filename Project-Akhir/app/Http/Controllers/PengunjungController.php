<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;
use PDF;
use App\Exports\PengunjungExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PengunjungImport;
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
        //
        return view('admin.pengunjung.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'username' => 'required',
            'password' => 'required',
            'nohp' => 'required|integer',
            'jk' => 'required',
            'email' => 'required',
            'alamat' => 'nullable|string|min:10',
            
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'username.required' => 'username wajib diisi',
            'password.required' => 'Password wajib diisi',
            'nohp' => 'No hpwajib diisi',
            'jk.required' => 'Jenis Kelamin wajib diisi',
            'alamat.required' => 'alamat wajib diisi',
        ]);
        //
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
    public function show( $id)
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
        //
        $pengunjung= DB::table('table_pengunjung')->where('id', $id)->get();
        return view('admin.pengunjung.edit', compact('pengunjung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'username' => 'required',
            'password' => 'required',
            'nohp' => 'required|integer',
            'jk' => 'required',
            'email' => 'required',
            'alamat' => 'nullable|string|min:10',
            
        ]);
        //
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
    public function destroy( $id)
    {
        //
        DB::table('table_pengunjung')->where('id', $id)->delete();
        Alert::info('Pengunjung', 'Berhasil Menghapus data pengunjung');
        return redirect('admin/pengunjung');
    }

    public function generatePDF()

    {

        $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y')

        ];

        $pdf = PDF::loadView('admin.pengunjung.myPDF', $data);

    

        return $pdf->download('testdownload.pdf');

    }

    public function pengunjungPDF(){
        $pengunjung = DB::table('table_pengunjung')
        ->get();
        $pdf = PDF::loadview('admin.pengunjung.pengunjungPDF',['pengunjung'=>$pengunjung])->setPaper('a4','landscape');;
        return $pdf->download('pengunjung.pdf');
        
    }

    public function exportExcel(){
        return Excel::download(new PengunjungExport, 'data_pengunjung.xlsx');
    }

    public function importExcel(Request $request){
        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_excel', $nama_file);
        Excel::import(new PengunjungImport, public_path('/file_excel/'.$nama_file));
        return redirect('admin/pengunjung');
        
    }
}
