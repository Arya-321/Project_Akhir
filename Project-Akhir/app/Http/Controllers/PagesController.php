<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Ulasan;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function Home()
    {
        //
        $home = Wisata::limit(6)->get();
        $ulasan = Ulasan::join('table_pengunjung', 'table_ulasan.pengunjung_id', '=', 'table_pengunjung.id')
        ->join('table_wisata', 'table_ulasan.wisata_id', '=', 'table_wisata.id')
        ->select('table_ulasan.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->take(4) // Mengambil hanya 4 dataset
        ->get();

    return view("frontend.pages.home", compact('home', 'ulasan'));

    }

    public function About()
    {
        //
        $about = "about";
        return view ("frontend.pages.about", compact('about'));

    }

    public function Trips()
    {
        //
        $trips = Wisata::all();
        return view ("frontend.pages.trips", compact('trips'));

    }

    public function Rating()
    {
        //
        $rating = Rating::join('table_pengunjung', 'table_rating.pengunjung_id', '=', 'table_pengunjung.id')
        ->join('table_wisata', 'table_rating.wisata_id', '=', 'table_wisata.id')
        ->select('table_rating.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->get();
        return view ("frontend.pages.rating", compact('rating'));

    }

    public function Ulasan()
    {
        //
        $ulasan = Ulasan::join('table_pengunjung', 'table_ulasan.pengunjung_id', '=', 'table_pengunjung.id')
        ->join('table_wisata', 'table_ulasan.wisata_id', '=', 'table_wisata.id')
        ->select('table_ulasan.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->get();
        return view( ' frontend.pages.ulasan', compact('ulasan'));

    }

    public function home_detail($id)
    {
        $home_detail = Wisata::find($id);
    
        return view('frontend.pages.home_detail', compact('home_detail'));
    }
}
