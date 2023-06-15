<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;
use App\Models\Wisata;
use App\Models\Rating;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use App\Exports\RatingExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RatingImport;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rating = Rating::join('table_pengunjung', 'table_rating.pengunjung_id', '=', 'table_pengunjung.id')
        ->join('table_wisata', 'table_rating.wisata_id', '=', 'table_wisata.id')
        ->select('table_rating.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->get();
        return view( ' admin.rating.index', compact('rating'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pengunjung = DB::table('table_pengunjung')->get();
        $wisata = DB::table('table_wisata')->get();
        $rating = Rating::join('table_pengunjung', 'table_rating.pengunjung_id', '=', 'table_pengunjung.id')
        ->join('table_wisata', 'table_rating.wisata_id', '=', 'table_wisata.id')
        ->select('table_rating.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->get();
        return view( 'admin.rating.create', compact('rating', 'pengunjung', 'wisata'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('table_rating')->insert([
            'nama' => $request->nama,
            'pengunjung_id'=> $request->pengunjung_id,
            'wisata_id'=> $request->wisata_id,
           
        ]);
        Alert::success('Rating', 'Berhasil menambahkan data rating');
        return redirect('admin/rating');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $rating = Rating::join('table_pengunjung', 'table_rating.pengunjung_id', '=', 'table_pengunjung.id')
        ->join('table_wisata', 'table_rating.wisata_id', '=', 'table_wisata.id')
        ->select('table_rating.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->where('table_rating.id', $id)
        ->get();
        return view ('admin.rating.detail', compact('rating'));

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pengunjung = DB::table('table_pengunjung')->get();
        $wisata = DB::table('table_wisata')->get();
        $rating = DB::table('table_rating')->where('id', $id)->get();

        return view ('admin.rating.edit', compact('rating', 'pengunjung','wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        DB::table('table_rating')->where('id', $request->id)->update([
            
            'pengunjung_id'=> $request->pengunjung_id,
            'wisata_id'=> $request->wisata_id,
            'nama' => $request->nama,
        ]);
        Alert::info('Rating', 'Berhasil Mengedit data rating');
        return redirect('admin/rating');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('table_rating')->where('id', $id)->delete();
        Alert::info('Rating', 'Berhasil Menghapus data rating');
        return redirect('admin/rating');
    }

    public function generatePDF()

    {

        $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y')

        ];

        $pdf = PDF::loadView('admin.rating.myPDF', $data);

    

        return $pdf->download('testdownload.pdf');

    }

    public function ratingPDF() {
        $rating =DB::table('table_rating')
        ->join('table_pengunjung', 'pengunjung_id', '=', 'table_rating.pengunjung_id')
        ->join('table_wisata', 'wisata_id', '=', 'table_rating.wisata_id')
        ->select('table_rating.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->get();
        $pdf = PDF::loadView('admin.rating.ratingPDF', ['rating' => $rating])->setPaper('a4','landscape');
        // return $pdf->download('data_rating.pdf');
        return $pdf->stream();
    }

    public function exportExcel(){
        return Excel::download(new RatingExport, 'data_rating.xlsx');
    }

    public function importExcel(Request $request){
        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_excel', $nama_file);
        Excel::import(new RatingImport, public_path('/file_excel/'.$nama_file));
        return redirect('admin/rating');
        
    }
}
