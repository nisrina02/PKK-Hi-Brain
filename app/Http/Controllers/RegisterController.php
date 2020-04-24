<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetugasModel;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $petugas = PetugasModel::all();
        return view('register', compact('petugas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_petugas'=>'required',
            'no_telp'=>'required',
            'email'=>'required',
            'password'=>'required',
            'level'=>'required'
        ]);
        $petugas = new PetugasModel;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->no_telp = $request->no_telp;
        $petugas->email = $request->email;
        $petugas->password = md5($request->password);
        $petugas->level = $request->level;
        $petugas->save();

        return redirect('/login')->with('alert_pesan', 'berhasil menambah data');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $petugas = PetugasModel::where('id', $id)->get();
      return view('register_edit', compact('petugas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama_petugas = $request->nama_petugas;
        $no_telp = $request->no_telp;
        $email = $request->email;
        $password = $request->password;
        $level = $request->level;

        $petugas = PetugasModel::where('id', $id)->first();
        $petugas->nama_petugas = $nama_petugas;
        $petugas->no_telp = $no_telp;
        $petugas->email = $email;
        $petugas->password = $password;
        $petugas->level = $level;
        $petugas->save();

        return redirect()->route('register.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $petugas = PetugasModel::where('id', $id)->first();
        $petugas->delete();

        return redirect()->route('register.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
