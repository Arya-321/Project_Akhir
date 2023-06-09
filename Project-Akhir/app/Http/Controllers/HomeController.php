<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $pengunjung = Pengunjung::count();
        // $ar_wilayah = DB::table('table_pengunjung')
        // ->selectRaw('jk, count(jk) as jumlah')
        // ->groupBy('jk')
        // ->get();
        // $ar_komentar = DB::table('table_rating')
        // ->selectRaw('nama, count(nama) as jumlah')
        // ->groupBy('nama')
        // ->get();
        // return view('admin.dashboard', compact('pengunjung', 'ar_wilayah', 'ar_komentar'));

        return redirect('admin/dashboard');
    
    }
}
