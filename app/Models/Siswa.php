<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelamar;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "table_siswa";

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function applySiswa(){
    //     return $this->hasMany(Pelamar::class);
    // }
}
