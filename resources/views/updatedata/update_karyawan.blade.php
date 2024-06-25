@extends('adminku.app')
@section('title', 'Edit Karyawan')

@section('content')
    <h1 class="h3 mb-4">Edit Karyawan</h1>

    <form action="{{ route('updateKaryawan', ['id_karyawan' => $karyawan->id_karyawan]) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Input fields untuk edit data karyawan -->
        <div class="mb-3">
            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $karyawan->email }}">
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $karyawan->no_hp }}">
        </div>
        <div class="mb-3">
            <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
            <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" value="{{ $karyawan->kode_jabatan }}">
        </div>
        <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <select class="form-select" id="jabatan" name="jabatan" aria-label="Default select example" required>
        <option value="" selected disabled>Pilih Jabatan</option>
        <option value="Admin" {{ $karyawan->jabatan === 'Admin' ? 'selected' : '' }}>Admin</option>
        <option value="Manager" {{ $karyawan->jabatan === 'Manager' ? 'selected' : '' }}>Manager</option>
        <option value="Karyawan" {{ $karyawan->jabatan === 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
    </select>
</div>

        <div class="mb-3">
            <label for="no_slip" class="form-label">Nomor Slip</label>
            <input type="text" class="form-control" id="no_slip" name="no_slip" value="{{ $karyawan->no_slip }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
