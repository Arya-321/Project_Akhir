<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'pengunjung';
    protected $primaryKey =['id'];
    protected $fillable = [
        'namaPengunjung', 'alamat', 'email', 'noHP'
    ];

    public function pengunjung(){
        return $this->hasMany(Pengunjung::class);
    }
=======
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
>>>>>>> denis
}
