<?php

namespace App\Http\Controllers\Master;

use App\Models\User;
use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
        $data = $request->validate([
            "nama_user" => ["required"],
            "username" => ["required"],
            "role" => ["required"],
            "email" => ["required"],
            "notelp" => ["required"],
            "password" => ["required"],
        ]);

        $data['password'] =  Hash::make($data['password']);
        User::create($data);
        return back();
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "nama_user" => ["required"],
            "username" => ["required"],
            "role" => ["required"],
            "email" => ["required"],
            "notelp" => ["required"],
        ]);
        $user = User::find($id);
        // dd($user);
        $user->update($data);
        return back();
    }
}
