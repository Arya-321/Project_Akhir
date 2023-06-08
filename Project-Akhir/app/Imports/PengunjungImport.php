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
            'nama' => $row[1],
            'username' => $row[2],
            'password' => $row[3],
            'nohp' => $row[4],
            'email' => $row[5],
            'alamat' => $row[6],
            
        ]);
    }
}
