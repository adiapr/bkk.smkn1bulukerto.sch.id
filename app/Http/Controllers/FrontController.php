<?php

namespace App\Http\Controllers;
use App\Models\PekerjaanModel;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $datapekerjaan = PekerjaanModel::orderBy('id','desc')->get();

        return view('front.index',compact('datapekerjaan'));
    }

}
