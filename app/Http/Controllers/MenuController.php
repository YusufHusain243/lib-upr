<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        $data = Menu::all();
        return view('admin/pages/menu/menu', [
            'page' => 'kelola-menu',
            'data' => $data,
        ]);
    }
    public function create()
    {
        //
    }
    public function store(StoreMenuRequest $request)
    {
        //
    }
    public function show(Menu $menu)
    {
        //
    }
    public function edit(Menu $menu)
    {
        //
    }

    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    public function destroy(Menu $menu)
    {
        //
    }
}
