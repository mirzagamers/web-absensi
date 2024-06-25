<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSlipGajiKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slipgaji', function (Blueprint $table) {
            $table->bigIncrements('id_gaji');
            $table->string('nik');
            $table->string('no_slip');
            $table->string('tanggal');
            $table->enum('jabatan', ['Admin','Manager','Karyawan'])->default('Admin');
            $table->string('pendapatan');
            $table->string('potongan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slipgaji');
    }
}
