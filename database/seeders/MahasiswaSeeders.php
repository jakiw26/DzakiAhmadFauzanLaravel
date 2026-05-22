<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB; 

class MahasiswaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'jakiwchen', 
                'nim' => '240414006', 
                'jurusan' => 'informatika', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ],
            [
                'nama' => 'Agus', 
                'nim' => '240414005', 
                'jurusan' => 'informatika', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ],
        ]);
    }
}