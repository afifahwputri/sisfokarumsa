<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keluar;

class KeluarController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$keluar = Keluar::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('keluar', ['keluar' => $keluar]);
    }
    public function tambah()
    {
    	return view('keluar_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nodaftar' => 'required'
        ]);
 
        Keluar::create([
            'idkeluar' => $request->idkeluar,
            'nodaftar' => $request->nodaftar,
            'tgl_keluar' => $request->tgl_keluar,
            'id_ruang' => $request->id_ruang,
            'lama_inap' => $request->lama_inap,
        ]);
 
        return redirect('/keluar');
    }
    public function edit($id)
    {
       $keluar = Keluar::find($id);
       return view('keluar_edit', ['keluar' => $keluar]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'nodaftar' => 'required'
        ]);
     
        $keluar = Keluar::find($id);
        $keluar->idkeluar = $request->idkeluar;
        $keluar->nodaftar = $request->nodaftar;
        $keluar->tgl_keluar = $request->tgl_keluar;
        $keluar->id_ruang = $request->id_ruang;
        $keluar->lama_inap = $request->lama_inap;
        $keluar->save();
        return redirect('/keluar');
    }
    public function delete($id)
    {
        $keluar = Keluar::find($id);
        $keluar->delete();
        return redirect('/keluar');
    }
}
