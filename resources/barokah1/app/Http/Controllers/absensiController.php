<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class absensiController extends Controller
{
    public function index()
    {
       
        return view('admin/absensi');
    }
}