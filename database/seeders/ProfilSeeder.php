<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'npsn' => '111111',
            'nama_lembaga' => 'SEKOLAH NUSANTARA',
            'nama_lembaganaungan' => 'Dinas Pendidikan Dan Kebudayaan',
            'pemerintah' => 'empty',
            'pemerintahkop' => 'jawa timur	',
            'alamat_lembaga' => 'Jl.Soekarno Hatta Blok 1',
            'kota_lembaga' => 'Surabaya',
            'provinsi_lembaga' => 'Jawa Timur',
            'notelp' => '0324 000111',
            'email' => 'info@sekolahnusantara.sch.id',
            'nama_kepsek' => 'Didik Purnomo',
            'nip_kepsek' => '1199287644012203',
            'alamatwebsite' => 'https://sekolahnusantara.sch.id',
            'logo' => '9e94660d834dfaadbb421bfb9cd2679a.png',
            'image' => 'empty',
            'pesanberjalan' => 'Selamat Datang Diportal Manajemen Smartschool SMA Negeri Nusantara Indonesia - Aplikasi Smartschool Digital Menuju Layanan Pendidikan Yang Berkualitas Berbasis Teknologi.',
            'status' => 'Negeri',
            'video_profil' => 'https://www.youtube.com/embed/RRgeXc7CPW4',
        ]);
    }
}
