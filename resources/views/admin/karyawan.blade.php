@extends('adminku.app')
@section('title','karyawan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 left-align mb-4">karyawan</h1>

    <div class="card-body">
        <a href="{{ route('tambahkaryawan') }}" class="btn btn-primary">Tambah Data</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Id karyawan</th>
                    <th scope="col" class="text-center">Nama karyawan</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">No hp</th>
                    <th scope="col" class="text-center">Jabatan</th>
                    <th scope="col" class="text-center">No slip</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data karyawan -->
                @if(isset($karyawan) && $karyawan->count() > 0)
                    @foreach ($karyawan as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->id_karyawan }}</td>
                            <td>{{ $row->nama_karyawan }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->no_hp }}</td> 
                            <td>{{ $row->jabatan }}</td> <!-- Menampilkan nama jabatan -->
                            <td>{{ $row->no_slip }}</td>
                            <td>
                                 <a href="{{ route('tampilUpdateKaryawan', ['id_karyawan' => $row->id_karyawan]) }}" class="btn btn-warning btn-sm">Update</a>
                                <form action="{{ route('deletekaryawan', ['id_karyawan' => $row->id_karyawan]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
