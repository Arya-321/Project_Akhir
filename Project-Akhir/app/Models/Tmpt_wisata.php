<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmpt_wisata extends Model
{
    use HasFactory;
    protected $table = 'tmpt_wisata';
    protected $primaryKey = ['id'];
    protected $fillable = [
        'namatpmt_wisata', 'deskripsi', 'gambar', 'alamat'
    ];

    public function tmpt_wisata()
    {
        return $this->hasMany(Tmpt_wisata::class);
    }
}
