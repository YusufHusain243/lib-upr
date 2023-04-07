<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $menu = Menu::all();
        $pengumuman = Pengumuman::all();
        return view('pages/home', [
            'page' => 'home',
            'menu' => $menu,
            'pengumuman' => $pengumuman,
        ]);
    }
}
