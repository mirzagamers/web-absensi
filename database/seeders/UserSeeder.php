<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Don't forget to import DB facade
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use DB facade to insert data
        DB::table('users')->insert([
            'email' => 'wulan@gmail.com',
            'role' => 1, // If you're storing roles as numbers, don't use quotes
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'email' => 'mirza@gmail.com',
            'role' => 2,
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'email' => 'rio@gmail.com',
            'role' => 3,
            'password' => bcrypt('123456'),
        ]);
    }
}
