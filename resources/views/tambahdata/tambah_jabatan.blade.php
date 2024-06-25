@extends('adminku.app')
@section('title', 'Tambah Data Jabatan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Jabatan</h1>
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <form action="{{ route('insertjabatan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="id_jabatan" class="col-sm-3 col-form-label">ID Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="id_jabatan" name="id_jabatan" required>
                        @error('id_jabatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="jabatan" name="jabatan" aria-label="Default select example" required>
                            <option value="" selected disabled>Pilih Jabatan</option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                        @error('jabatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="gaji_pokok" class="col-sm-3 col-form-label">Gaji Pokok</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" required>
                        @error('gaji_pokok')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tunjangan_jabatan" class="col-sm-3 col-form-label">Tunjangan Jabatan</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan" required>
                        @error('tunjangan_jabatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
