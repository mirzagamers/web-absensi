<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlipGaji extends Model
{
    use HasFactory;

    protected $table = 'slipgaji';

    protected $fillable = [
        'id_gaji',
        'jabatan',
        'pendapatan',
        'potongan',
    ];

    // Sebagai contoh, jika Anda memiliki kolom tanggal pada tabel, Anda bisa menambahkan properti berikut:
    // protected $dates = ['tanggal'];
}
