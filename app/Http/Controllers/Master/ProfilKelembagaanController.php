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

    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = $request->validate([
            'npsn' => ['required'],
            'nama_lembaga' => ['required'],
            'nama_lembaganaungan' => ['required'],
            'pemerintah' => ['nullable'],
            'pemerintahkop' => ['required'],
            'alamat_lembaga' => ['required'],
            'kota_lembaga' => ['required'],
            'provinsi_lembaga' => ['required'],
            'notelp' => ['required'],
            'email' => ['required'],
            'nama_kepsek' => ['required'],
            'nip_kepsek' => ['required'],
            'alamatwebsite' => ['required'],
            'logo' => ['nullable'],
            'image' => ['nullable'],
            'pesanberjalan' => ['required'],
            'status' => ['nullable'],
            'video_profil' => ['required'],
        ]);
        $profil = Profil::find($id);
        $data['logo'] = $request->has('logo') ? $request->file('logo')->store('assets/logo', 'public') : $profil->logo;
        $profil->update($data);
        return back();
    }
}
