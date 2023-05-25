<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'id_tingkat' => '1',
            'nama_kelas' => 'X IPS 1',
            'kode_kelas' => rand(100000000000, 900000000000),
        ]);
        Kelas::create([
            'id_tingkat' => '2',
            'nama_kelas' => 'XI IPS 1',
            'kode_kelas' => rand(100000000000, 900000000000),
        ]);
        Kelas::create([
            'id_tingkat' => '3',
            'nama_kelas' => 'XII IPS 1',
            'kode_kelas' => rand(100000000000, 900000000000),
        ]);
    }
}
