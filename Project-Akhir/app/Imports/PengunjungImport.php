<?php

namespace App\Imports;

use App\Models\Pengunjung;
use Maatwebsite\Excel\Concerns\ToModel;

class PengunjungImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pengunjung([
            //
            'nama'=> $row[1],
            'wisata_id'    => $row[2],
            'komentar'     => $row[3],
           
        ]);
    }
}
