<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Pendaftar;
use App\Models\Profil;
use App\Models\Tingkat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $data = [
            'siswa_count' => Pendaftar::count(),
            'guru_count' => Guru::count(),
            'kelas_count' => Kelas::count(),
            'tingkat_count' => Tingkat::count(),
            'profil' => Profil::latest('id_profil')->first(),
        ];
        return view('pages.admin.dashboard', $data);
    }
}
