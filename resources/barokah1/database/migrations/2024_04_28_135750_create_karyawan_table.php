<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->bigIncrements('id_karyawan');
            $table->string('nama_karyawan');
            $table->string('email');
            $table->string('no_hp');
            $table->string('kode_jabatan');
            $table->enum('id_jabatan', ['Golongan 1', 'Golongan 2'])->default('Golongan 1');
            $table->string('no_slip');
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
        Schema::dropIfExists('karyawan');
    }
}
