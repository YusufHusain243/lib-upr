<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Menu;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $menu = Menu::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        return view('pages/home', [
            'menu' => $menu,
            'pengumuman' => $pengumuman,
            'berita' => $berita,
        ]);
    }
}
