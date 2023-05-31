<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Pendaftar;
use App\Models\Profil;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function __invoke()
    {
        $data = [
            'count_guru' => Guru::count(),
            'count_siswa' => Pendaftar::count(),
            'data_lembaga' => Profil::first(),
        ];
        return view('pages.beranda', $data);
    }
}
