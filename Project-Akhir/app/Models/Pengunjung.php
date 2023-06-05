<?php

namespace App\Models;

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
}
