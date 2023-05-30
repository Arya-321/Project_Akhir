<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'rating';
    protected $primaryKey =['idRating'];
    protected $fillable = [
        'nilaiRating', 'tgl_rating'
    ];

    public function rating(){
        return $this->hasMany(Rating::class);
    }
}

