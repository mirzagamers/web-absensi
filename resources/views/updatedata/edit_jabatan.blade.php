@extends('adminku.app')
@section('title', 'Edit Jabatan')

@section('content')
    <h1 class="h3 left-align mb-4">Edit Jabatan</h1>
    <form action="{{ route('updatejabatan', ['id_jabatan' => $jabatan->id_jabatan]) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Formulir untuk mengedit data jabatan -->
        <!-- Misalnya, Anda dapat menambahkan input untuk mengedit nama jabatan, gaji pokok, dan tunjangan jabatan -->
        <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <select class="form-select" id="jabatan" name="jabatan" aria-label="Default select example" required>
        <option value="" selected disabled>Pilih Jabatan</option>
        <option value="Admin" {{ $jabatan->jabatan === 'Admin' ? 'selected' : '' }}>Admin</option>
        <option value="Manager" {{ $jabatan->jabatan === 'Manager' ? 'selected' : '' }}>Manager</option>
        <option value="Karyawan" {{ $jabatan->jabatan === 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
    </select>
</div>

        <div class="mb-3">
            <label for="gaji_pokok">Gaji Pokok</label>
            <input type="number" id="gaji_pokok" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tunjangan_jabatan">Tunjangan Jabatan</label>
            <input type="number" id="tunjangan_jabatan" name="tunjangan_jabatan" value="{{ $jabatan->tunjangan_jabatan }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
