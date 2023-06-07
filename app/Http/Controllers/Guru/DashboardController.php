<?php

namespace App\Http\Controllers\Guru;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Profil;
use App\Models\Tingkat;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
            'siswa_count' => Pendaftar::count(),
            'guru_count' => Guru::count(),
            'kelas_count' => Kelas::count(),
            'tingkat_count' => Tingkat::count(),
            'profil' => Profil::latest('id_profil')->first(),
        ];
        return view('pages.guru.dashboard', $data);
    }
}
