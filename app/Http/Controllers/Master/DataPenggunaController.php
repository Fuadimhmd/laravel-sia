<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class DataPenggunaController extends Controller
{
    public function index()
    {
        $datapengguna = User::get();
        return view('pages.master.kelembagaan.datapengguna.index', [
            'datapengguna' => $datapengguna
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return back();
    }
}
