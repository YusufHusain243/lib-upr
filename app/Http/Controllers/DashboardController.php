<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Menu;
use App\Models\Pengumuman;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $menu = Menu::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $agenda = Agenda::all();
        $galeri = Galeri::orderBy('id', 'desc')->limit(4)->get();
        return view('pages/home', [
            'menu' => $menu,
            'pengumuman' => $pengumuman,
            'berita' => $berita,
            'agenda' => $agenda,
            'galeri' => $galeri,
        ]);
    }
}
