<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nodaftar');
            $table->integer('nokartu');
            $table->date('tgl_daftar');
            $table->integer('id_ranjang');
            $table->string('status',20);
            $table->date('tgl_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masuk');
    }
}
