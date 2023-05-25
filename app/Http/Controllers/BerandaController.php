<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function __invoke()
    {
        $data = [
            'data_lembaga' => Profil::first(),
        ];
        return view('pages.beranda', $data);
    }
}
