<?php

namespace App\Imports;

use App\Models\Rating;
use Maatwebsite\Excel\Concerns\ToModel;

class RatingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rating([
            //
            'pengunjung_id'=> $row[1],
            'wisata_id'    => $row[2],
            'nama'     => $row[3],
            
        ]);
    }
}
