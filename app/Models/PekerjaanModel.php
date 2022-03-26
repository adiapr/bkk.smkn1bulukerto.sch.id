<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelamar;

class PekerjaanModel extends Model
{
    use HasFactory;

    protected $table = 'table_pekerjaan';

    public function pelamar(){
        return $this->hasMany(Pelamar::class);
    }
}
