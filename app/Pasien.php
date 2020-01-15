<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = "pasien";
    protected $fillable = ['nokartu','tgl_daftar','nama','alamat','tempat_lahir','tgl_lahir','agama','goldar','jenis_kelamin'];
}
