<?php

namespace App\Http\Controllers;

use App\Models\StafPerpustakaan;
use App\Http\Requests\StoreStafPerpustakaanRequest;
use App\Http\Requests\UpdateStafPerpustakaanRequest;

class StafPerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StafPerpustakaan::all();
        return view('admin/pages/staf_perpustakaan', [
            'page' => 'kelola-staf',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStafPerpustakaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStafPerpustakaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StafPerpustakaan  $stafPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show(StafPerpustakaan $stafPerpustakaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StafPerpustakaan  $stafPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(StafPerpustakaan $stafPerpustakaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStafPerpustakaanRequest  $request
     * @param  \App\Models\StafPerpustakaan  $stafPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStafPerpustakaanRequest $request, StafPerpustakaan $stafPerpustakaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StafPerpustakaan  $stafPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(StafPerpustakaan $stafPerpustakaan)
    {
        //
    }
}
