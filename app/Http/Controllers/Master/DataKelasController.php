<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Tingkat;
use Illuminate\Http\Request;

class DataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.masterdata.datakelas.index', [
            'datakelas' => Kelas::get(),
            'datatingkat' => Tingkat::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nama_kelas" => ['required'],
            "tingkat_kelas" => ['required'],
        ]);

        $data['kode_kelas'] = rand(100000000000, 900000000000);
        $data['id_tingkat'] = $data['tingkat_kelas'];

        Kelas::create($data);
        return back()->with('created', 'kelas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelas = Kelas::find($id);
        $data = $request->validate([
            "nama_kelas" => ['required'],
            "tingkat_kelas" => ['required'],
        ]);
        $data['id_tingkat'] = $data['tingkat_kelas'];

        $kelas->update($data);
        return back()->with('updated', 'kelas berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return back()->with('deleted', 'kelas berhasil di hapus');
    }
}
