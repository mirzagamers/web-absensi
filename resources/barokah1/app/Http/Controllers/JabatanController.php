<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('admin.jabatan', compact('jabatan')); 
    }


    public function insertjabatan(Request $request)
    {
        $request->validate([
            'id_jabatan' => 'required',
            'kode_jabatan' => 'required|numeric',
            'gaji_pokok' => 'required|numeric',
            'tunjangan_jabatan' => 'required|numeric',
        ]);

        Jabatan::create($request->all());
        
        return redirect()->route('jabatan')->with('success', 'Data Berhasil Ditambahkan');
    }
}
