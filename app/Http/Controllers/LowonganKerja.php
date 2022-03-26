<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PekerjaanModel;
use File;
use Illuminate\Support\Facades\Auth;

class LowonganKerja extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_datalowongan(){
        $no = 1;
        $datalowongan = PekerjaanModel::orderBy('id','desc')
                        ->get();


        return view('administrator.data-lowongankerja', compact('no','datalowongan'));
    }

    public function addLowongan(Request $request){
        $this->validate($request,[
            'logo' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $logo = $request->logo;
        $namafile = time().'.'.$logo->getClientOriginalExtension();
        $logo->move('img/company/', $namafile);

        $datalowongan = new PekerjaanModel;

        $datalowongan->perusahaan        = $request->perusahaan;
        $datalowongan->lokasi            = $request->lokasi;
        $datalowongan->posisi            = $request->posisi;
        $datalowongan->batas            = $request-> batas;
        $datalowongan->lulusan          = $request->lulusan;
        $datalowongan->logo             = $namafile;
        $datalowongan->deskripsi        = $request->deskripsi;

        $datalowongan->save();

        toast('Data berhasil ditambahkan', 'success');
        return redirect('/data-lowongankerja');

    }

    public function daftar($id){
        $lowongan = PekerjaanModel::find($id)->first();
        $id_user = Auth::user()->id;
        $user = User::where('id', $id_user)->first();

        return view('front.daftar', compact('lowongan','user'));
    }
}
