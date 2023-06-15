<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'admin';
    protected $primaryKey = ['id'];
    protected $filelable = ['nama'];

    public function admin(){
        return $this->hasMany(Admin::class);
    }
=======
    protected $table = 'table_admin';
    protected $primaryKey = ['id'];
    protected $fillable = ['nama'];

    // public function admin(){
    //     return $this->hasMany(Admin::class);
    // }
>>>>>>> denis
}
