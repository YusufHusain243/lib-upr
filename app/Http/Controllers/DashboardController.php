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
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $menu = Menu::all();
        $pengumuman = Pengumuman::orderBy('id', 'desc')->limit(4)->get();
        $berita = Berita::orderBy('id', 'desc')->limit(4)->get();
        $agenda = Agenda::orderBy('id', 'desc')->limit(4)->get();
        $galeri = Galeri::orderBy('id', 'desc')->limit(4)->get();
        return view('pages/home', [
            'menu' => $menu,
            'pengumuman' => $pengumuman,
            'berita' => $berita,
            'agenda' => $agenda,
            'galeri' => $galeri
        ]);
    }

    public function switch($locale)
    {
        Session::put('locale', $locale);
        return redirect()->back();
    }

    public function information($page)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        if ($page == 'pengumuman' || $page == 'announcement') {
            $data = Pengumuman::orderBy('id', 'desc')->get();
        }
        if ($page == 'berita' || $page == 'news') {
            $data = Berita::orderBy('id', 'desc')->get();
        }
        if ($page == 'agenda' || $page == 'agenda') {
            $data = Agenda::orderBy('id', 'desc')->get();
        }
        return view('pages/list_information', [
            'data' => $data,
        ]);
    }
}
