@extends('adminku.app')
@section('title', 'Tambah Data Karyawan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Karyawan</h1>
    <form action="{{ route('insertkaryawan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
        </div>

        <div class="mb-3">
            <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
            <input type="number" class="form-control" id="kode_jabatan" name="kode_jabatan" required>
        </div>
        

        <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <select class="form-select" id="jabatan" name="jabatan" aria-label="Default select example" required>
        <option value="" selected disabled>Pilih Jabatan</option>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
        <option value="karyawan">Karyawan</option>
    </select>
</div>

        <div class="mb-3">
            <label for="no_slip" class="form-label">No Slip</label>
            <input type="number" class="form-control" id="no_slip" name="no_slip" value="{{ old('no_slip') }}">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
