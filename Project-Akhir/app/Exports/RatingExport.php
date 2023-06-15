<?php

namespace App\Exports;

use App\Models\Rating;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class RatingExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Rating::all();
        $rating = Rating::join('table_pengunjung', 'table_pengunjung.id', '=', 'table_rating.pengunjung_id')
        ->join('table_wisata', 'table_wisata.id', '=', 'table_rating.wisata_id')
        ->select('table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata', 'table_rating.nama' )
        ->get();
        return $rating;
    }

    public function headings(): array
    {
        return ["Pengunjung", "Wisata", "Rating"];
    }
    
}
