<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganKerja extends Controller
{
    public function index_datalowongan(){
        return view('administrator.data-lowongankerja');
    }
}
