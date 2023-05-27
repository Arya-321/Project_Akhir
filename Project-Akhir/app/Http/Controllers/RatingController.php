<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rating = DB::table('rating')->get();
        return view('admin.rating.index',compact('rating'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.rating.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('rating')->insert([
            'idRating' => $request->idRating,
            'nilaiRating' => $request->nilaiRating,
            'tgl_rating' => $request->tgl_rating,
        ]);
        return redirect('admin/rating');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idRating)
    {
        //
        $rating = DB::table('rating')->where('idRating', $idRating)->get();

        return view('admin.rating.edit', compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idRating)
    {
        //buat proses edit form
        DB::table('rating')->where('idRating', $request->idRating)->update([
            'nilaiRating' => $request->nilaiRating,
            'tgl_rating' => $request->tgl_rating,
        ]);
        //ketika selesai mengupdate maka arahkan ke halaman admin divisi index
        return redirect('admin/rating');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idRating)
    {
        //
    }
}
