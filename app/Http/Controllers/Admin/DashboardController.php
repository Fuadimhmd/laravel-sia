<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use App\Models\Profil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $data = [
            'siswa_count' => Pendaftar::count(),
            'profil' => Profil::latest('id_profil')->first(),
        ];
        return view('pages.admin.dashboard', $data);
    }
}
