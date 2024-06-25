@include('adminku.style')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Detail Jabatan</h1>

<form action="{{ route('updatejabatan', $jabatan->id_jabatan) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Menambahkan method PUT untuk update -->

    <div class="mb-3">
        <label for="id_jabatan" class="form-label">ID Jabatan</label>
        <input type="text" class="form-control" id="id_jabatan" name="id_jabatan" value="{{ $jabatan->id_jabatan }}" readonly>
    </div>
    <div class="mb-3">
        <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
        <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" value="{{ $jabatan->kode_jabatan }}">
    </div>
    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <select class="form-select" id="jabatan" name="jabatan" aria-label="Default select example">
            <option value="Admin" {{ $jabatan->jabatan == 'Admin' ? 'selected' : '' }}>Admin</option>
            <option value="Manager" {{ $jabatan->jabatan == 'Manager' ? 'selected' : '' }}>Manager</option>
            <option value="Karyawan" {{ $jabatan->jabatan == 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
        <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}">
    </div>
    <div class="mb-3">
        <label for="tunjangan_jabatan" class="form-label">Tunjangan Jabatan</label>
        <input type="number" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan" value="{{ $jabatan->tunjangan_jabatan }}">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<!-- Tombol untuk menghapus jabatan -->
<form action="{{ route('deletejabatan', $jabatan->id_jabatan) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jabatan ini?')">Hapus Jabatan</button>
</form>
