<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    protected $table = "keluar";
    protected $fillable = ['idkeluar','nodaftar','tgl_keluar','id_ruang','lama_inap'];
}
