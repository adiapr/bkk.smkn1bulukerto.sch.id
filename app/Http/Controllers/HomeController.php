<?php

namespace App\Http\Controllers;
use App\Models\PekerjaanModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datapekerjaan = PekerjaanModel::orderBy('id','desc')->get();

        return view('front.index',compact('datapekerjaan'));
    }
}
