<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bed;

class BedController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$bed = Bed::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('bed', ['bed' => $bed]);
    }
    public function tambah()
    {
    	return view('bed_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'idranjang' => 'required',
            'noranjang' => 'required'
        ]);
 
        Bed::create([
            'idranjang' => $request->idranjang,
            'noranjang' => $request->noranjang,
            'idruang' => $request->idruang,
            'status' => $request->status
        ]);
 
        return redirect('/bed');
    }
    public function edit($id)
    {
       $bed = Bed::find($id);
       return view('bed_edit', ['bed' => $bed]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'idranjang' => 'required',
            'noranjang' => 'required'
        ]);
     
        $bed = Bed::find($id);
        $bed->idranjang = $request->idranjang;
        $bed->noranjang = $request->noranjang;
        $bed->idruang = $request->idruang;
        $bed->status = $request->status;
        $bed->save();
        return redirect('/bed');
    }
    public function delete($id)
    {
        $bed = Bed::find($id);
        $bed->delete();
        return redirect('/bed');
    }
}
