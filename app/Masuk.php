<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    protected $table = "masuk";
    protected $fillable = ['nodaftar','nokartu','tgl_daftar','idranjang','status','tgl_keluar'];
}
