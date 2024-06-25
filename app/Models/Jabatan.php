<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan'; // Menetapkan nama tabel

    protected $primaryKey = 'id_jabatan'; // Menetapkan primary key yang benar

    public $timestamps = false; // Menonaktifkan timestamps otomatis

    protected $fillable = ['id_jabatan', 'jabatan', 'gaji_pokok', 'tunjangan_jabatan'];
}
