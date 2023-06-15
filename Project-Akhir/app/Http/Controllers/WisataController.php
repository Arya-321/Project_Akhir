<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

=======
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
>>>>>>> denis

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

<<<<<<< HEAD

=======
>>>>>>> denis
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
<<<<<<< HEAD
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
=======
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
>>>>>>> denis
            'nama' => $request->nama,
            'deksripsi' => $request->deksripsi,
            'alamat' => $request->alamat,
            'foto' => $fileName,


        ]);
<<<<<<< HEAD
=======
        Alert::success('Wisata', 'Berhasil menambahkan data wisata');
>>>>>>> denis
        return redirect('admin/wisata');
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show($id)
=======
    public function show( $id)
>>>>>>> denis
    {
        //
        $wisata = DB::table('table_wisata')->where('id', $id)->get();

<<<<<<< HEAD
        return view('admin.wisata.detail', compact('wisata'));
=======
        return view ('admin.wisata.detail', compact('wisata'));
>>>>>>> denis
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit($id)
    {
        //
=======
    public function edit(string $id)
    {
        //arahkan ke file edit yang ada di divisi view
>>>>>>> denis
        $wisata = DB::table('table_wisata')->where('id', $id)->get();

        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
<<<<<<< HEAD
        //
        if (!empty($request->foto)) {
            $fileName = 'foto' . $request->id . '.' . $request->foto->extension();
            $request->foto->move(public_path('admin/image'), $fileName);
        } else {
            $fileName = '';
=======
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
>>>>>>> denis
        }
        DB::table('table_wisata')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'deksripsi' => $request->deksripsi,
            'alamat' => $request->alamat,
            'foto' => $fileName,
<<<<<<< HEAD
        ]);
        //ketika selesai mengupdate maka arahkan ke halaman admin divisi index
=======


        ]);
        Alert::info('Wisata', 'Berhasil Mengedit data wisata');
>>>>>>> denis
        return redirect('admin/wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy($id)
    {
        //
        DB::table('table_wisata')->where('id', $id)->delete();
        return redirect('admin/wisata');
    }
=======
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
>>>>>>> denis
}
