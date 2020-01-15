<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masuk;

class MasukController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$masuk = Masuk::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('masuk', ['masuk' => $masuk]);
    }
    public function tambah()
    {
    	return view('masuk_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nodaftar' => 'required'
        ]);
 
        Masuk::create([
            'nodaftar' => $request->nodaftar,
            'nokartu' => $request->nokartu,
            'tgl_daftar' => $request->tgl_daftar,
            'idranjang' => $request->idranjang,
            'status' => $request->status,
            'tgl_keluar' => $request->tgl_keluar
        ]);
 
        return redirect('/masuk');
    }
    public function edit($id)
    {
       $masuk = Masuk::find($id);
       return view('masuk_edit', ['masuk' => $masuk]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'nodaftar' => 'required'
        ]);
     
        $masuk = Masuk::find($id);
        $masuk->nodaftar = $request->nodaftar;
        $masuk->nokartu = $request->nokartu;
        $masuk->tgl_daftar = $request->tgl_daftar;
        $masuk->idranjang = $request->idranjang;
        $masuk->status = $request->status;
        $masuk->tgl_keluar = $request->tgl_keluar;
        $masuk->save();
        return redirect('/masuk');
    }
    public function delete($id)
    {
        $masuk = Masuk::find($id);
        $masuk->delete();
        return redirect('/masuk');
    }
}
