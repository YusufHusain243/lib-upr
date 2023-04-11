<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            if (Auth::user()) {
                return redirect('/dashboard')->with('Success', 'Login Berhasil Selamat Datang ' . auth()->user()->name);
            } else {
                Auth::logout();
                return redirect('/login')->with('Error', 'Login Gagal');
            }
        }
        return redirect('/login')->with('Error', 'Login Gagal');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
