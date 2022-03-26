<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;

class ApplyController extends Controller
{
    //
    public function apply(Request $request){
        $pelamar = new Pelamar;

        $pelamar->user_id       = $request->user_id;
        $pelamar->pekerjaan_id  = $request->lowongan_id;
        $pelamar->nama          = $request->nama;
        $pelamar->tgl_lahir     = $request->tgl_lahir;
        $pelamar->alamat        = $request->alamat;
        $pelamar->sekolah       = $request->asal;
        $pelamar->jurusan       = $request->jurusan;
        $pelamar->tahun_lulus   = $request->tahun;
        $pelamar->no_telp       = $request->telp;
        $pelamar->tgl_daftar    = date('Y-m-d');
        $pelamar->status        = 'Sedang Diproses';

        $pelamar->save();
        toast('Data berhasil ditambahkan','success');
        return redirect('/');
    }
}
