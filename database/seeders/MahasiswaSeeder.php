<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
           'nama' => 'Rosi',
           'nim' => 46,
           'tgl_lahir' => '2000-08-09', 
        ]);

        DB::table('mahasiswas')->insert([
            'nama' => 'Lorenzo',
            'nim' => 99,
            'tgl_lahir' => '2001-10-19',  
         ]);
    }
}
