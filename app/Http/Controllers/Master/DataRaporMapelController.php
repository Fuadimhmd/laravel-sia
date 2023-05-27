<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Rapormapel;
use Illuminate\Http\Request;

class DataRaporMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.erapor.mapelumum.index', [
            'datarapormapel' => Rapormapel::get(),
            // 'datatingkat' => Tingkat::get(),
        ]);
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
    public function show(Rapormapel $rapormapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rapormapel $rapormapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rapormapel $rapormapel)
    {
        //
    }
}
