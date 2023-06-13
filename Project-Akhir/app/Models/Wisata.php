<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'table_wisata';
    protected $primaryKey = ['id'];
    protected $filelable = [
        'nama', 'deksripsi', 'alamat', 'foto'
    ];
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }
    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }
}
