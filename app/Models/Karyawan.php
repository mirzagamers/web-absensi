<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans'; // Menetapkan nama tabel

    protected $primaryKey = 'id_karyawan'; // Menetapkan primary key

    protected $fillable = [ // Atribut yang bisa diisi secara massal
        'id_karyawan',
        'nama_karyawan',
        'email',
        'no_hp',
        'kode_jabatan',
        'jabatan',
        'no_slip'
    ];

    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; // Jenis data dari primary key

    // Definisikan relasi jika diperlukan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'kode_jabatan', 'kode_jabatan');
    }
}
