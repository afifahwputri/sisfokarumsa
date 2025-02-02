<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $fillable = ['idkelas','nama_kelas','jenis_kelas'];

    public function pasien()
    {
    	return $this->belongsTo('App\Pasien');
    }
}
