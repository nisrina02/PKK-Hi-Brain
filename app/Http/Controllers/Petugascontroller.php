<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetugasModel;
use Validator;
use Session;

class Petugascontroller extends Controller
{
    public function index()
    {
        return view('login PKK');
    }

    public function cek(Request $req)
    {
        $this->validate($req, [
            'email'=>'required',
            'password'=>'required'
        ]);

        $proses=PetugasModel::where('email', $req->email)->where('password', md5($req->password))->first();
        if($proses)
        {
            Session::put('id', $proses->id);
            Session::put('email', $proses->email);
            Session::put('password', md5($proses->password));
            Session::put('nama_petugas', $proses->nama_petugas);
            Session::put('no_telp', $proses->no_telp);
            Session::put('level', $proses->level);
            Session::put('login_status', true);
            return redirect('/dashboard2');
        } else {
            Session::flash('alert_pesan', 'Email dan password tidak cocok');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Session::flush();
        return Redirect('/login');
    }
}
