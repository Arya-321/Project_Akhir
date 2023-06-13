<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ar_wilayah = DB::table('table_pengunjung')
        ->selectRaw('jk, count(jk) as jumlah')
        ->groupBy('jk')
        ->get();
        $ar_komentar = DB::table('table_rating')
        ->selectRaw('nama, count(nama) as jumlah')
        ->groupBy('nama')
        ->get();
         return view('user.dashboard', compact('ar_wilayah', 'ar_komentar'));
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
