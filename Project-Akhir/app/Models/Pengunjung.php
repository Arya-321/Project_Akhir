<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table = 'pengunjung';
    protected $primaryKey =['id'];
    protected $filelable = [
        'namaPengunjung', 'alamat', 'email', 'noHP'
    ];

    public function pengunjung(){
        return $this->hasMany(Pengunjung::class);
    }
}
