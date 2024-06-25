<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {   
        $karyawan = Karyawan::all();
        return view('admin.karyawan', compact('karyawan'));
    }

    public function tambahkaryawan()
    {
     
        $karyawan = new Karyawan(); // Membuat instance baru dari model Karyawan
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
        Karyawan::create($request->all());
        
        // Redirect kembali ke halaman karyawan dengan pesan sukses
        return redirect()->route('karyawan')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function tampilkaryawan($id_karyawan)
{
    $karyawan = Karyawan::find($id_karyawan);
    return view('updatedata.tampilkaryawan', compact('karyawan'));
}

public function updatekaryawan(Request $request, $id_karyawan)
{
    // Validate the request data
    $request->validate([
        'nama_karyawan' => 'required',
        'email' => 'required|email',
        'no_hp' => 'required|numeric',
        'kode_jabatan' => 'required|numeric',
        'id_jabatan' => 'required|in:1,2', // Ensure id_jabatan is either 1 or 2
        'no_slip' => 'required',
    ]);

    // Find the karyawan by id
    $karyawan = Karyawan::find($id_karyawan);

    // Update the karyawan
    $karyawan->update($request->all());

    // Redirect back with success message
    return redirect()->route('karyawan')->with('success', 'Data Berhasil Diupdate');
}

public function deletekaryawan($id_karyawan)
{
    $karyawan = Karyawan::find($id_karyawan);
    if($karyawan){
        $karyawan->delete();
    }
    return redirect()->route('karyawan')->with('success','Data Berhasil DiHapus');
}



}
