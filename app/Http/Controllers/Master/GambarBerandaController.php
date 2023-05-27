<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\SettingBanner;
use Illuminate\Http\Request;

class GambarBerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.pengaturan.datagambarbanner.index', [
            'gambarbanner' => SettingBanner::first(),
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
    public function show(SettingBanner $settingBanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SettingBanner $settingBanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SettingBanner $settingBanner)
    {
        //
    }
}
