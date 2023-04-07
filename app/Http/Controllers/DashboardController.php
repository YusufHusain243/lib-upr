<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Menu;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }

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
            'galeri' => $galeri
        ]);
    }

    public function switch($locale){
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
