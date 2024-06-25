<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans'; // Menetapkan nama tabel

    protected $primaryKey = 'id_karyawan';

    protected $guarded = [];
}
