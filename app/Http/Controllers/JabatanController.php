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

    public function create()
    {
        return view('tambahdata.tambah_jabatan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jabatan' => 'required|unique:jabatan,id_jabatan',
            'jabatan' => 'required|string',
            'gaji_pokok' => 'required|numeric',
            'tunjangan_jabatan' => 'required|numeric',
        ]);

        Jabatan::create($request->all());
        
        return redirect()->route('jabatan.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('admin.tampil_jabatan', compact('jabatan'));
    }

    public function edit($id_jabatan)
    {
        $jabatan = Jabatan::findOrFail($id_jabatan);
        return view('editdata.edit_jabatan', compact('jabatan'));
    }

    public function update(Request $request, $id_jabatan)
    {
        $request->validate([
            'jabatan' => 'required|string|max:255',
            'gaji_pokok' => 'required|numeric',
            'tunjangan_jabatan' => 'required|numeric',
        ]);

        $jabatan = Jabatan::findOrFail($id_jabatan);
        $jabatan->update($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil diperbarui');
    }

    public function destroy($id_jabatan)
    {
        $jabatan = Jabatan::findOrFail($id_jabatan);
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil dihapus');
    }
}
