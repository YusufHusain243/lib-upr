<?php

namespace App\Http\Controllers;

use App\Models\TimManajemen;
use App\Http\Requests\StoreTimManajemenRequest;
use App\Http\Requests\UpdateTimManajemenRequest;

class TimManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TimManajemen::all();
        return view('admin/pages/tim_manajemen/tim_manajemen', [
            'page' => 'kelola-tim-manajemen',
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
     * @param  \App\Http\Requests\StoreTimManajemenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTimManajemenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimManajemen  $timManajemen
     * @return \Illuminate\Http\Response
     */
    public function show(TimManajemen $timManajemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimManajemen  $timManajemen
     * @return \Illuminate\Http\Response
     */
    public function edit(TimManajemen $timManajemen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTimManajemenRequest  $request
     * @param  \App\Models\TimManajemen  $timManajemen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimManajemenRequest $request, TimManajemen $timManajemen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimManajemen  $timManajemen
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimManajemen $timManajemen)
    {
        //
    }
}
