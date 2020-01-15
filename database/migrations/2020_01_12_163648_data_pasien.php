<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nokartu');
            $table->date('tgl_daftar');
            $table->string('nama_pasien',25);
            $table->text('alamat');
            $table->string('tempat_lahir',25);
            $table->date('tgl_lahir');
            $table->string('agama',15);
            $table->string('goldar',2);
            $table->string('jenis_kelamin',15);

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
        Schema::dropIfExists('pasien');
    }
}
