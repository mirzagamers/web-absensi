<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan'; // Menetapkan nama tabel

    // Jika primary key tabel 'jabatan' adalah 'id', biarkan saja tanpa diatur
    // protected $primaryKey = 'id';

    protected $guarded = [];
}
