<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MenuSiswa;
use Illuminate\Http\Request;

class MenuLayananSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.pengaturan.menulayanansiswa.index', [
            'menusiswa' => MenuSiswa::get(),
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
    public function show(MenuSiswa $menuSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuSiswa $menuSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuSiswa $menuSiswa)
    {
        //
    }
}
