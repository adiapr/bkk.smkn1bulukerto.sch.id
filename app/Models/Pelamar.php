<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PekerjaanModel;
use App\Models\Siswa;

class Pelamar extends Model
{
    use HasFactory;

    protected $table = "table_pelamar";

    public function pekerjaan(){
        return $this->belongsTo(PekerjaanModel::class);
    }

    // public function siswa(){
    //     return $this->belongsTo(Siswa::class);
    // }
}

