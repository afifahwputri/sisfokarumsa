<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$kelas = Kelas::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('kelas', ['kelas' => $kelas]);
    }
    public function tambah()
    {
    	return view('kelas_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'idkelas' => 'required'
        ]);
 
        Kelas::create([
            'idkelas' => $request->idkelas,
            'nama_kelas' => $request->nama_kelas,
            'jenis_kelas' => $request->jenis_kelas
        ]);
 
        return redirect('/kelas');
    }
    public function edit($id)
    {
       $kelas = Kelas::find($id);
       return view('kelas_edit', ['kelas' => $kelas]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'idkelas' => 'required'
        ]);
     
        $kelas = Kelas::find($id);
        $kelas->idkelas = $request->idkelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->jenis_kelas = $request->jenis_kelas;
        $kelas->save();
        return redirect('/kelas');
    }
}
