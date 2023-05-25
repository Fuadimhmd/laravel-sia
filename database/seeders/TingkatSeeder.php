<?php

namespace Database\Seeders;

use App\Models\Tingkat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tingkat::create([
            'nama_tingkat' => 'X'
        ]);
        Tingkat::create([
            'nama_tingkat' => 'XI'
        ]);
        Tingkat::create([
            'nama_tingkat' => 'XII'
        ]);
    }
}
