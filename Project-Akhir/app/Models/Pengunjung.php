<?php

namespace App\Models;
use App\Models\Ulasan;
use App\Models\Rating;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table ='table_pengunjung';
    protected $primaryKey = ['id'];
    protected $fillable = [
        'nama', 'username','jk', 'password', 'nohp', 'email', 'alamat'
];
public function rating(){
    return $this->hasMany(Rating::class); //memanggil relasi antara table divisi dengan table rating
}
public function ulasan(){
    return $this->hasMany(Ulasan::class); //memanggil relasi antara table divisi dengan table ulasan
}
}
