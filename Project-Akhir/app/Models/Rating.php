<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'rating';
    protected $primaryKey =['idRating'];
    protected $fillable = [
        'nilaiRating', 'tgl_rating'
    ];

    public function rating(){
        return $this->hasMany(Rating::class);
    }
}

=======
    protected $table = 'table_rating';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',  'pengunjung_id', 'wisata_id'
    ];
   public function pengunjung() {
    return $this->belongsTo(Pengunjung::class);
   }

   public function wisata(){
    return $this->belongsTo(Wisata::class);
   }
}
>>>>>>> denis
