<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pasien;

class PasienController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$pasien = Pasien::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('pasien', ['pasien' => $pasien]);
    }
    public function tambah()
    {
    	return view('pasien_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nokartu' => 'required',
            'nama' => 'required'
        ]);
 
        Pasien::create([
            'nokartu' => $request->nokartu,
            'tgl_daftar' => $request->tgl_daftar,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'goldar' => $request->goldar,
            'jenis_kelamin' => $request->jenis_kelamin,
            'idkelas' => $request->idkelas
        ]);
 
        return redirect('/pasien');
    }
    public function edit($id)
    {
       $pasien = Pasien::where('id',$id)->get();
       return view('pasien_edit', compact('pasien'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'nokartu' => 'required',
            'nama' => 'required'
        ]);

        $pasien = Pasien::find($id);
        $pasien->nokartu = $request->nokartu;
        $pasien->tgl_daftar = $request->tgl_daftar;
        $pasien->nama = $request->nama;
        $pasien->alamat = $request->alamat;
        $pasien->tempat_lahir = $request->tempat_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->agama = $request->agama;
        $pasien->goldar = $request->goldar;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->idkelas = $request->idkelas;
        $pasien->save();
        return redirect('/pasien');
    }
    public function delete($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/pasien');
    }
}
