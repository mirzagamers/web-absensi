<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'nama_karyawan' => 'John Doe',
            'email' => 'john@example.com',
            'no_hp' => '081234567890',
            'kode_jabatan' => 'KJ001',
            'id_jabatan' => 'Golongan 1',
            'no_slip' => 'SLIP001',
        ]);

        Karyawan::create([
            'nama_karyawan' => 'Jane Doe',
            'email' => 'jane@example.com',
            'no_hp' => '087654321098',
            'kode_jabatan' => 'KJ002',
            'id_jabatan' => 'Golongan 2',
            'no_slip' => 'SLIP002',
        ]);
    }
}
