@extends('adminku.app')
@section('title','jabatan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 left-align mb-4">jabatan</h1>
    <a href="{{ route('tambahjabatan') }}" class="btn btn-primary">Tambah Data</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">ID Jabatan</th>
            <th scope="col" class="text-center">Jabatan</th>
            <th scope="col" class="text-center">Gaji Pokok</th>
            <th scope="col" class="text-center">Tunjangan Jabatan</th>
            <th scope="col" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data jabatan -->
        @foreach ($jabatan as $row)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $row->id_jabatan }}</td>
                <td class="text-center">{{ $row->jabatan }}</td>
                <td class="text-center">{{ $row->gaji_pokok }}</td>
                <td class="text-center">{{ $row->tunjangan_jabatan }}</td>
                <td class="text-center">
                    <a href="{{ route('editjabatan', ['id_jabatan' => $row->id_jabatan]) }}" class="btn btn-warning btn-sm">Update</a>
                    <form action="{{ route('deletejabatan', ['id_jabatan' => $row->id_jabatan]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jabatan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    </div>
@endsection
