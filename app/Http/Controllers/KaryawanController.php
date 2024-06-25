<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\models\Jabatan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('admin.karyawan', compact('karyawan'));
    }

    public function tambahKaryawan()
    {
        $karyawan = new Karyawan();
        return view('tambahdata.tambah_karyawan', compact('karyawan'));
    }

    public function insertKaryawan(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'email' => 'required|email|unique:karyawans,email',
            'no_hp' => 'required|numeric',
            'kode_jabatan' => 'required|numeric',
            'jabatan' => 'required|in:admin,manager,karyawan',
            'no_slip' => 'required',
        ], [
            'nama_karyawan.required' => 'Nama karyawan harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus valid.',
            'email.unique' => 'Email sudah digunakan.',
            'no_hp.required' => 'Nomor HP harus diisi.',
            'no_hp.numeric' => 'Nomor HP harus berupa angka.',
            'kode_jabatan.required' => 'Kode jabatan harus diisi.',
            'kode_jabatan.numeric' => 'Kode jabatan harus berupa angka.',
            'jabatan.required' => 'Jabatan harus diisi.',
            'jabatan.in' => 'Jabatan tidak valid.',
            'no_slip.required' => 'Nomor slip harus diisi.',
        ]);

        Karyawan::create($request->all());
        
        return redirect()->route('karyawan')->with('success', 'Data Berhasil Ditambahkan');
    }


    public function tampilkaryawan($id_karyawan)
    {
        $karyawan = Karyawan::findOrFail($id_karyawan);
        $jabatan = Jabatan::all();
        return view('updatedata.tampil_karyawan', compact('karyawan', 'jabatan'));
    }

    public function tampilUpdateKaryawan($id_karyawan)
{
    $karyawan = Karyawan::findOrFail($id_karyawan);
    $jabatan = Jabatan::all();
    return view('updatedata.update_karyawan', compact('karyawan', 'jabatan'));
}

public function updateKaryawan(Request $request, $id_karyawan)
{
    // Validasi input jika diperlukan

    $karyawan = Karyawan::findOrFail($id_karyawan);
    $karyawan->nama_karyawan = $request->nama_karyawan;
    $karyawan->email = $request->email;
    $karyawan->no_hp = $request->no_hp;
    $karyawan->jabatan = $request->jabatan;
    $karyawan->no_slip = $request->no_slip;
    // Update data karyawan dengan input baru
    $karyawan->save();

    return redirect()->route('karyawan')->with('success', 'Data karyawan berhasil diperbarui');
}




    // public function updateKaryawan(Request $request, $id_karyawan)
    // {
    //     $request->validate([
    //         'nama_karyawan' => 'required',
    //         'email' => 'required|email|unique:karyawans,email,'.$id_karyawan.',id_karyawan', // Menambahkan 'id_karyawan' sebagai primary key
    //         'no_hp' => 'required|numeric',
    //         'kode_jabatan' => 'required|numeric',
    //         'jabatan' => 'required|in:admin,manager,karyawan',
    //         'no_slip' => 'required',
    //     ], [
    //         'nama_karyawan.required' => 'Nama karyawan harus diisi.',
    //         'email.required' => 'Email harus diisi.',
    //         'email.email' => 'Email harus valid.',
    //         'email.unique' => 'Email sudah digunakan.',
    //         'no_hp.required' => 'Nomor HP harus diisi.',
    //         'no_hp.numeric' => 'Nomor HP harus berupa angka.',
    //         'kode_jabatan.required' => 'Kode jabatan harus diisi.',
    //         'kode_jabatan.numeric' => 'Kode jabatan harus berupa angka.',
    //         'jabatan.required' => 'Jabatan harus diisi.',
    //         'jabatan.in' => 'Jabatan tidak valid.',
    //         'no_slip.required' => 'Nomor slip harus diisi.',
    //     ]);

    //     // Menggunakan `primaryKey` `id_karyawan` untuk update data
    //     $karyawan = Karyawan::findOrFail($id_karyawan);
    //     $karyawan->update($request->all());

    //     return redirect()->route('karyawan')->with('success', 'Data Berhasil Diupdate');
    // }

    public function deleteKaryawan($id_karyawan)
    {
        $karyawan = Karyawan::find($id_karyawan);
        if($karyawan){
            $karyawan->delete();
            return redirect()->route('karyawan')->with('success','Data Berhasil Dihapus');
        }
        return redirect()->route('karyawan')->with('error','Data Tidak Ditemukan');
    }
}
