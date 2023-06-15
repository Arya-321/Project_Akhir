<?php

namespace App\Exports;

use App\Models\Ulasan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UlasanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Ulasan::all();
        $ulasan = Ulasan::join('table_pengunjung', 'table_pengunjung.id', '=', 'table_ulasan.pengunjung_id')
        ->join('table_wisata', 'table_wisata.id', '=', 'table_ulasan.wisata_id')
        ->select('table_pengunjung.nama as pengunjung', 'table_wisata.nama as wisata', 'table_ulasan.komentar' )
        ->get();
        return $ulasan;
    }

    public function headings(): array
    {
        return ["Pengunjung", "Wisata", "Ulasan"];
    }
}
