@extends('adminku.app')
@section('title', 'Daftar Slip Gaji')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Daftar Slip Gaji</h1>
    <a href="{{ route('tambahslipgaji') }}" class="btn btn-primary">Tambah Slip Gaji</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col" class="text-center">ID Gaji</th>
                <th scope="col" class="text-center">Jabatan</th>
                <th scope="col" class="text-center">Pendapatan</th>
                <th scope="col" class="text-center">Potongan</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slipgaji as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->jabatan }}</td>
                               <td class="text-center">{{ $item->pendapatan }}</td>
                       <td class="text-center">{{ $item->potongan }}</td>
                       <td class="text-center">
                           <a href="{{ route('edit_slip_gaji', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                           <form action="{{ route('delete_slip_gaji', ['id' => $item->id]) }}" method="POST" style="display:inline;">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus slip gaji ini?')">Hapus</button>
                           </form>
                       </td>
                   </tr>
               @endforeach
           </tbody>
       </table>
   @endsection
