<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daffa',
            'role' => 'admin',
            'email' => 'daffa@gmail.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'Ronaldo',
            'role' => 'siswa',
            'mahasiswa_id' => 1,
            'email' => 'ronaldo@gmail.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'Neymar',
            'role' => 'siswa',
            'mahasiswa_id' => 2,
            'email' => 'neymar@gmail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
