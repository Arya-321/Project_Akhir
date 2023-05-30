<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey =['idAdmin'];
    protected $fillable = [
        'nama_admin', 'username', 'password'
    ];

    public function admin(){
        return $this->hasMany(Admin::class);
    }
}
