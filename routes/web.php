<?php

use App\Http\Controllers\absensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\slip_gajiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\permohonancutiController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('admin.dashboard');
});

Route::get('karyawan', function () {
    return view('admin.karyawan');
});

Route::get('/', [loginController::class, 'loadLogin'])->name('login');
Route::post('/login', [loginController::class, 'login'])->name('login.submit');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'isAdmin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
    Route::get('/tambahkaryawan', [KaryawanController::class, 'tambahKaryawan'])->name('tambahkaryawan');
    Route::post('/insertkaryawan', [KaryawanController::class, 'insertKaryawan'])->name('insertkaryawan');
    Route::get('/tampilkaryawan/{id_karyawan}', [KaryawanController::class, 'tampilKaryawan'])->name('tampilkaryawan');
    Route::get('/updatekaryawan/{id_karyawan}', [KaryawanController::class, 'tampilUpdateKaryawan'])->name('tampilUpdateKaryawan');
    Route::put('/updatekaryawan/{id_karyawan}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');
    Route::delete('/deletekaryawan/{id_karyawan}', [KaryawanController::class, 'deleteKaryawan'])->name('deletekaryawan');

    Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::get('/tambahjabatan', [JabatanController::class, 'create'])->name('tambahjabatan');
    Route::post('/insertjabatan', [JabatanController::class, 'store'])->name('insertjabatan');
    Route::get('/tampiljabatan/{id_jabatan}', [JabatanController::class, 'show'])->name('tampiljabatan');
    Route::get('/jabatan/{id_jabatan}/edit', [JabatanController::class, 'edit'])->name('editjabatan');
    Route::put('/jabatan/{id_jabatan}', [JabatanController::class, 'update'])->name('updatejabatan');
    Route::delete('/jabatan/{id_jabatan}', [JabatanController::class, 'destroy'])->name('deletejabatan');

    Route::get('/golongan', [GolonganController::class, 'index'])->name('golongan.index');
    Route::get('/slip_gaji', [slip_gajiController::class, 'index'])->name('slip_gaji.index');
    Route::get('/tambahslipgaji', [slip_gajiController::class, 'create'])->name('tambahslipgaji');
    Route::post('/simpanslipgaji', [slip_gajiController::class, 'store'])->name('simpanslipgaji');
    Route::get('/permohonancuti', [permohonancutiController::class, 'index'])->name('permohonancuti.index');
    Route::get('/absensi', [absensiController::class, 'index'])->name('absensi.index');
    Route::delete('/admin/slip_gaji/{id}', [slip_gajiController::class, 'delete'])->name('delete_slip_gaji');

});

// Karyawan Routes
Route::group(['prefix' => 'karyawan', 'middleware' => ['web', 'isKaryawan']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.karyawan');
    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.karyawan');
    Route::get('/tambahkaryawan', [KaryawanController::class, 'tambahKaryawan'])->name('tambahkaryawan.karyawan');
    Route::post('/insertkaryawan', [KaryawanController::class, 'insertKaryawan'])->name('insertkaryawan.karyawan');
    Route::get('/tampilkaryawan/{id_karyawan}', [KaryawanController::class, 'tampilKaryawan'])->name('tampilkaryawan.karyawan');
    Route::put('/updatekaryawan/{id_karyawan}', [KaryawanController::class, 'updateKaryawan'])->name('updatekaryawan');
    Route::delete('/deletekaryawan/{id_karyawan}', [KaryawanController::class, 'deleteKaryawan'])->name('deletekaryawan.karyawan');

    Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.karyawan');
    Route::get('/golongan', [GolonganController::class, 'index'])->name('golongan.karyawan');
    Route::get('/slip_gaji', [slip_gajiController::class, 'index'])->name('slip_gaji.karyawan');
    Route::get('/permohonancuti', [permohonancutiController::class, 'index'])->name('permohonancuti.karyawan');
    Route::get('/absensi', [absensiController::class, 'index'])->name('absensi.karyawan');
});

// Manager Routes
Route::group(['prefix' => 'manager', 'middleware' => ['web', 'isManager']], function () {
    Route::get('/dashboard-manager', [DashboardController::class, 'index'])->name('dashboard-manager');
    Route::get('/permohonancuti-manager', [permohonancutiController::class, 'index'])->name('permohonancuti-manager');
});

// Rute tambahan untuk dashboard karyawan
Route::get('/dashboard-karyawan', [DashboardController::class, 'index'])->name('dashboard-karyawan');

// Rute tambahan untuk jabatan di luar grup rute karyawan
Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');

// Rute tambahan untuk karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
Route::get('/karyawan/create', [KaryawanController::class, 'tambahKaryawan'])->name('tambahkaryawan');
Route::post('/karyawan', [KaryawanController::class, 'insertKaryawan'])->name('insertkaryawan');
Route::get('/karyawan/{id_karyawan}/edit', [KaryawanController::class, 'tampilKaryawan'])->name('tampilkaryawan');
Route::post('/karyawan/{id_karyawan}', [KaryawanController::class, 'updateKaryawan'])->name('updatekaryawan');
Route::delete('/karyawan/{id_karyawan}', [KaryawanController::class, 'deleteKaryawan'])->name('deletekaryawan');

?>
