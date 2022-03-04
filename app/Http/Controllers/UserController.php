<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::orderBy('id','desc')->get();
        $no = 1;
        return view('administrator.user', compact('user','no'));
    }

    public function addUser(Request $request){
        $this->validate($request,[
            'email'     => 'required|email|unique:users',
            'password'  => 'min:8'
        ]);

        $user = new User;

        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level    = 'User';

        $user->save();
        toast('Data berhasil ditambahkan','success');
        return redirect('/administrator/user');
    }

    public function editUser(Request $request, $id){
        $user = User::find($id);

        if($request->input('password')){
            $user->name     = $request->nama;
            $user->email    = $request->email;
            $request->password  = $request->password;
        }else{
            $user->name     = $request->nama;
            $user->email    = $request->email;
        }

        $user->update();
        toast('Data Berhasil Diperbarui', 'info');
        return redirect('/administrator/user');
    }

    public function hapusUser($id){
        $user = User::find($id);
        $user->delete();

        toast('Data telah dihapus','warning');
        return redirect('/administrator/user');
    }
}
