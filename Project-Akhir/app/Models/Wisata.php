<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'tempatwisata';
    protected $primaryKey = ['idTempatWisata'];
    protected $fillable = [
        'namaTempatWisata', 'deskripsi', 'gambar', 'alamat'
    ];

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
