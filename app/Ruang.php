<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = "ruang";
    protected $fillable = ['idruang','kdruang','nama_ruang','idkelas'];
}
