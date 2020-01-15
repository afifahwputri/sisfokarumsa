<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $table = "bed";
    protected $fillable = ['idranjang','noranjang','idruang','status'];
}
