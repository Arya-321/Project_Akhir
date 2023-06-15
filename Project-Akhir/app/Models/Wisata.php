<?php

namespace App\Models;
use App\Models\Ulasan;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'table_wisata';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama','deskripsi','alamat','foto'
    ];

    public function rating(){
        return $this->hasMany(Rating::class);
    }

    public function ulasan(){
        return $this->hasMany(Ulasan::class);
    }
}
