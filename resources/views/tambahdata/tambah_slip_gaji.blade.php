<!-- tambah.blade.php -->

@extends('adminku.app')
@section('title', 'Tambah Slip Gaji')

@section('content')
    <h1 class="h3 left-align mb-4">Tambah Slip Gaji</h1>

    <form action="{{ route('simpanslipgaji') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-select" id="jabatan" name="jabatan" required>
                <option value="" selected disabled>Pilih Jabatan</option>
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="Karyawan">Karyawan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pendapatan" class="form-label">Pendapatan</label>
            <input type="number" class="form-control" id="pendapatan" name="pendapatan" required>
        </div>
        <div class="mb-3">
            <label for="potongan" class="form-label">Potongan</label>
            <input type="number" class="form-control" id="potongan" name="potongan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
