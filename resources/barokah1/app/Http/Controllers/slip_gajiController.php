<?php

namespace App\Http\Controllers;

use App\Models\Slipgaji;
use Illuminate\Http\Request;

class slip_gajiController extends Controller
{
    public function index()
    {
       
        return view('admin/slip_gaji');
    }

    public function tambahkaryawan()
    {
        $karyawan = new Slipgaji(); // Membuat instance baru dari model Karyawan
        return view('tambahdata.tambah_karyawan', compact('karyawan'));
    }

    public function insertkaryawan(Request $request)
    {
        // Validasi data sebelum disimpan jika diperlukan
        $request->validate([
            'nama_karyawan' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'kode_jabatan' => 'required|numeric',
            'id_jabatan' => 'required',
            'no_slip' => 'required',
        ]);

        // Buat data karyawan baru dengan data dari request
        Slipgaji::create($request->all());
        
        // Redirect kembali ke halaman karyawan dengan pesan sukses
        return redirect()->route('karyawan')->with('success', 'Data Berhasil Ditambahkan');
    }
}
