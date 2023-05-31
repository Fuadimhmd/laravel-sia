<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Tingkat;
use Illuminate\Http\Request;

class DataTingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.masterdata.datatingkat.index', [
            'datatingkat' => Tingkat::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tingkat::create($request->all());
        return back()->with('created', 'data tingkat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tingkat = Tingkat::find($id);
        $tingkat->update(['nama_tingkat' => $request->nama_tingkat]);
        return back()->with('updated', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tingkat = Tingkat::find($id);
        $tingkat->delete();
        return back()->with('deleted', 'data berhasil di hapus');
    }
}
