<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruang;

class RuangController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$ruang = Ruang::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('ruang', ['ruang' => $ruang]);
    }
    public function tambah()
    {
    	return view('ruang_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'idruang' => 'required',
            'kdruang' => 'required'
        ]);
 
        Ruang::create([
            'idruang' => $request->idruang,
            'kdruang' => $request->kdruang,
            'nama_ruang' => $request->nama_ruang,
            'idkelas' => $request->idkelas
        ]);
 
        return redirect('/ruang');
    }
    public function edit($id)
    {
       $ruang = Ruang::find($id);
       return view('ruang_edit', ['ruang' => $ruang]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'idruang' => 'required',
            'kdruang' => 'required'
        ]);
     
        $ruang = Ruang::find($id);
        $ruang->idruang = $request->idruang;
        $ruang->kdruang = $request->kdruang;
        $ruang->nama_ruang = $request->nama_ruang;
        $ruang->idkelas = $request->idkelas;
        $ruang->save();
        return redirect('/ruang');
    }
}
