<?php

namespace App\Http\Controllers;

use App\Models\SlipGaji;
use Illuminate\Http\Request;

class SlipGajiController extends Controller
{
    public function index()
    {
        $slipgaji = SlipGaji::all();
        return view('admin.slip_gaji', compact('slipgaji'));
    }

    public function delete($id)
    {
        $slipGaji = SlipGaji::findOrFail($id);
        $slipGaji->delete();

        return redirect()->route('slip_gaji.index')->with('success', 'Slip gaji berhasil dihapus.');
    }

    // Metode lainnya...
}

