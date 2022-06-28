<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Pelamar;
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
        
        $lowongan = PekerjaanModel::where('id', $id)->first();
        $id_user = Auth::user()->id;
        $pelamar = Pelamar::where('user_id', $id_user)->first();
        // dd($lowongan->id);
        
        if(($pelamar->user_id == $id_user) && ($pelamar->pekerjaan_id == $id )){
            alert()->info('Lamaran Terkrim','Silahkan menunggu untuk informasi selanjutnya'); 
            return back();
        }else{
            $user = User::where('id', $id_user)->first();
            // dd($user->name);
            return view('front.daftar', compact('lowongan','user'));
        }
    }
}
