<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

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
        $request->validate([
            'nama' => 'required|max:45',
            'deksripsi' => 'required',
            'alamat' => 'nullable|string|min:4',
            'foto' => 'nullable|image|mimes:png,jps,jpeg,gif,svg|max:2048',
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'deksripsi.required' => 'Deksripsi wajib diisi',
            
            'foto.required' => 'Foto wajib diisi',
        ]);
        //fungsi untuk mengisi data pada form
        if(!empty($request->foto)){
            $fileName = 'foto-'.$request->id.'.'.$request->foto->extension();
            $request->foto->move(public_path('admin/image'), $fileName);
        }
        else{
            $fileName = '';
        }
        DB::table('table_wisata')->insert([
            'nama' => $request->nama,
            'deksripsi' => $request->deksripsi,
            'alamat' => $request->alamat,
            'foto' => $fileName,


        ]);
        Alert::success('Wisata', 'Berhasil menambahkan data wisata');
        return redirect('admin/wisata');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $wisata = DB::table('table_wisata')->where('id', $id)->get();

        return view ('admin.wisata.detail', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke file edit yang ada di divisi view
        $wisata = DB::table('table_wisata')->where('id', $id)->get();

        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'deksripsi' => 'required',
            'alamat' => 'nullable|string|min:4',
            'foto' => 'nullable|image|mimes:png,jps,jpeg,gif,svg|max:2048',
        ]);
        //foto lama apabila user mengganti fotonya

        $foto = DB::table('table_wisata')->select('foto')->where('id', $request->id)->get();
        foreach($foto as $f){
            $namaFileFotoLama = $f->foto;
        }
        //apakah use ingin ganti foto lama
        if(!empty($request->foto)){
            //jika ada foto lama maka hapus dulu fotonya
        if(!empty($p->foto)) unlink('admin/image/'.$p->foto);
        //proses ganti foto
            $fileName = 'foto-'.$request->id.'.'.$request->foto->extension();
            $request->foto->move(public_path('admin/image'), $fileName);
        }
        else{
            $fileName = $namaFileFotoLama;
        }
        DB::table('table_wisata')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'deksripsi' => $request->deksripsi,
            'alamat' => $request->alamat,
            'foto' => $fileName,


        ]);
        Alert::info('Wisata', 'Berhasil Mengedit data wisata');
        return redirect('admin/wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        DB::table('table_wisata')->where('id', $id)->delete();
        Alert::info('Wisata', 'Berhasil Menghapus data wisata');
        return redirect('admin/wisata');
    }

    public function generatePDF()

    {

        $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y')

        ];

        $pdf = PDF::loadView('admin.wisata.myPDF', $data);

    

        return $pdf->download('testdownload.pdf');

    }

    public function wisataPDF(){
        $wisata = DB::table('table_wisata')
        ->get();
        $pdf = PDF::loadview('admin.wisata.wisataPDF',['wisata'=>$wisata])->setPaper('a4','landscape');;
        // return $pdf->download('wisata.pdf');
        return $pdf->stream();
        
    }
}
