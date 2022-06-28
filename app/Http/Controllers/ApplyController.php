<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    //
    public function apply(Request $request){
        $pelamar = new Pelamar;
        $siswa   = Siswa::find($request->siswa_id); 

        $siswa->lulusan       = $request->tahun;
        $siswa->tgl_lahir     = $request->tgl_lahir;
        $siswa->alamat        = $request->alamat;
        $siswa->sekolah       = $request->asal;
        $siswa->jurusan       = $request->jurusan;
        $siswa->no_telp       = $request->telp;
        $siswa->update();

        $pelamar->user_id   
            = $request->user_id;
        $pelamar->siswa_id      = $request->siswa_id;
        $pelamar->pekerjaan_id  = $request->lowongan_id;
        $pelamar->tgl_daftar    = date('Y-m-d');
        $pelamar->status        = 'Sedang Diproses';
        $pelamar->save();

        toast('Data berhasil ditambahkan','success');
        return back();
    }
}
