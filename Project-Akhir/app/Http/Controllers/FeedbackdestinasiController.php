<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Ulasan;

class FeedbackdestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $wisata = Wisata::limit(6)->get();
        $ulasan = Ulasan::join('table_pengunjung', 'table_ulasan.pengunjung_id', '=', 'table_pengunjung.id')
        ->join('table_wisata', 'table_ulasan.wisata_id', '=', 'table_wisata.id')
        ->select('table_ulasan.*', 'table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata')
        ->take(4) // Mengambil hanya 4 dataset
        ->get();

return view('feedbackdestinasi', compact('wisata', 'ulasan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
