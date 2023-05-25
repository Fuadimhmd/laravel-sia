<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'role' => 'admin',
            'nama_user' => 'admin',
            'username' => 'ADMIN',
            'email' => 'admin@example.com',
        ]);
        User::factory()->create([
            'role' => 'bk',
            'nama_user' => 'bk',
            'username' => 'BK',
            'email' => 'bk@example.com',
        ]);
        User::factory()->create([
            'role' => 'operator',
            'nama_user' => 'operator',
            'username' => 'operator',
            'email' => 'operator@example.com',
        ]);
        User::factory()->create([
            'role' => 'kepsek',
            'nama_user' => 'kepsek',
            'username' => 'kepsek',
            'email' => 'kepsek@example.com',
        ]);
        User::factory()->create([
            'role' => 'user',
            'nama_user' => 'user',
            'username' => 'user',
            'email' => 'user@example.com',
        ]);
        User::factory()->create([
            'role' => 'humas',
            'nama_user' => 'humas',
            'username' => 'humas',
            'email' => 'humas@example.com',
        ]);
    }
}
