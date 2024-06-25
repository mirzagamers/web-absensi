<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 'Admin' role
        DB::table('roles')->insert([
            'name' => 'Admin',
        ]);

        // Insert 'Karyawan' role
        DB::table('roles')->insert([
            'name' => 'Karyawan',
        ]);

        // Insert 'Manager' role
        DB::table('roles')->insert([
            'name' => 'Manager',
        ]);
    }
}
