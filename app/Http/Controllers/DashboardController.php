<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = Menu::all();
        return view('pages/home', [
            'page' => 'home',
            'data' => $data,
        ]);
    }
}
