<?php

namespace App\Imports;

use App\Models\Ulasan;
use Maatwebsite\Excel\Concerns\ToModel;

class UlasanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ulasan([
            'pengunjung_id'=> $row[1],
            'wisata_id'    => $row[2],
            'komentar'     => $row[3],
           
        ]);
    }
}
