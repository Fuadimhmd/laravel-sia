<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function informasi()
    {
        $data_profil = Guru::find(auth()->guard('guru')->user()->id_guru);
        // dd($data);
        return view('pages.guru.biodata.informasi', compact('data_profil'));
    }
    public function foto()
    {
        $data_profil = Guru::find(auth()->guard('guru')->user()->id_guru);
        // dd($data);
        return view('pages.guru.biodata.foto', compact('data_profil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        //
    }
}
