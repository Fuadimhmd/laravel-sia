<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilKelembagaanController extends Controller
{
    public function index(string $id)
    {
        $profil = Profil::find($id);
        return view('pages.master.kelembagaan.profilekelembagaan.index', [
            'profil' => $profil
        ]);
    }
}
