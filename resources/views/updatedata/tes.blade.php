@extends('adminku.app')
@section('title','absensi')

@section('content')
    <!-- Page Heading -->
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/adminku/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/adminku/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Karyawan</h1>
    <form action="{{ route('updatekaryawan', ['id_karyawan' => $karyawan->id_karyawan]) }}" method="POST">
    @csrf
    @method('PUT') <!-- Gunakan metode PUT untuk mengirimkan permintaan update -->

    <label for="nama_karyawan">Nama Karyawan:</label>
    <input type="text" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}"><br>

    <!-- Tambahkan input untuk data lainnya -->

    <button type="submit">Simpan Perubahan</button>
    </form>

@endsection
