@include('adminku.style')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Detail Jabatan</h1>

<form action="{{ route('deletejabatan', $jabatan->id_jabatan) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jabatan ini?');">
    @csrf
    @method('DELETE')
    <div class="mb-3">
        <label for="id_jabatan" class="form-label">ID Jabatan</label>
        <input type="text" class="form-control" id="id_jabatan" name="id_jabatan" value="{{ $jabatan->id_jabatan }}" readonly>
    </div>
    <div class="mb-3">
        <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
        <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" value="{{ $jabatan->kode_jabatan }}" readonly>
    </div>
    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <select class="form-select" id="jabatan" name="jabatan" aria-label="Default select example" disabled>
            <option value="Admin" {{ $jabatan->jabatan == 'Admin' ? 'selected' : '' }}>Admin</option>
            <option value="Manager" {{ $jabatan->jabatan == 'Manager' ? 'selected' : '' }}>Manager</option>
            <option value="Karyawan" {{ $jabatan->jabatan == 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
        <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}" readonly>
    </div>
    <div class="mb-3">
        <label for="tunjangan_jabatan" class="form-label">Tunjangan Jabatan</label>
        <input type="number" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan" value="{{ $jabatan->tunjangan_jabatan }}" readonly>
    </div>
    <button type="submit" class="btn btn-danger btn-block">Hapus</button>
</form>
