<?php

namespace App\Http\Controllers;

use App\Models\Jejaring;
use App\Http\Requests\StoreJejaringRequest;
use App\Http\Requests\UpdateJejaringRequest;

class JejaringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jejaring::all();
        return view('admin/pages/jejaring/jejaring', [
            'page' => 'kelola-jejaring',
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
     * @param  \App\Http\Requests\StoreJejaringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJejaringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jejaring  $jejaring
     * @return \Illuminate\Http\Response
     */
    public function show(Jejaring $jejaring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jejaring  $jejaring
     * @return \Illuminate\Http\Response
     */
    public function edit(Jejaring $jejaring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJejaringRequest  $request
     * @param  \App\Models\Jejaring  $jejaring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJejaringRequest $request, Jejaring $jejaring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jejaring  $jejaring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jejaring $jejaring)
    {
        //
    }
}
