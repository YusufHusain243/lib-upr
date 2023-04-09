<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:menus',
                'nama_en' => 'required',
                'url' => 'required',
                'logo_menu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama_en.required' => 'Nama (English) tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',

                'url.required' => 'URL tidak boleh kosong',
            ]
        );


        if ($validator) {
            if (isset($request->logo_menu)) {
                $file_gambar = $request->logo_menu->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->logo_menu->getClientOriginalExtension();
                $result = $request->logo_menu->move(public_path('storage/images'), $name);
            }

            $result = Menu::create([
                'nama' => $request->nama,
                'nama_en' => $request->nama_en,
                'url' => $request->url,
                'logo' => $name,
            ]);

            if ($result) {
                return redirect('/kelola-menu')->with('MenuSuccess', 'Tambah Menu Berhasil');
            }
            return redirect('/kelola-menu')->with('MenuError', 'Tambah Menu Gagal');
        }
    }

    public function edit($id)
    {
        $data = Menu::findOrFail($id);
        return view('admin/pages/menu/edit_menu', [
            'page' => 'kelola-menu',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:menus',
                'nama_en' => 'required',
                'url' => 'required',
                'logo_menu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama_en.required' => 'Nama (English) tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',

                'url.required' => 'URL tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Menu::findOrFail($id);

            if (file_exists(public_path('storage/images/' . $data->logo))) {
                unlink(public_path('storage/images/' . $data->logo));

                $file_gambar = $request->logo_menu->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->logo_menu->getClientOriginalExtension();
                $request->logo_menu->move(public_path('storage/images'), $name);

                $data->update([
                    'nama' => $request->nama,
                    'nama_en' => $request->nama_en,
                    'url' => $request->url,
                    'logo' => $name,
                ]);

                if ($data) {
                    return redirect('/kelola-menu')->with('MenuSuccess', 'Edit Menu Berhasil');
                }
                return redirect('/kelola-menu')->with('MenuError', 'Edit Menu Gagal');
            }
        }
    }

    public function destroy($id)
    {
        $data = Menu::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            unlink(public_path('storage/images/' . $data->logo));
            if ($result) {
                return redirect('/kelola-menu')->with('MenuSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-menu')->with('MenuError', 'Hapus Data Gagal');
        }
    }
}
