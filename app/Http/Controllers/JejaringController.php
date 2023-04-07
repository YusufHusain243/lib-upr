<?php

namespace App\Http\Controllers;

use App\Models\Jejaring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class JejaringController extends Controller
{
    public function index()
    {
        $data = Jejaring::all();
        return view('admin/pages/jejaring/jejaring', [
            'page' => 'kelola-jejaring',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:menus',
                'url' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',

                'url.required' => 'URL tidak boleh kosong',
            ]
        );


        if ($validator) {
            if (isset($request->foto)) {
                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);
            }

            $result = Jejaring::create([
                'nama' => $request->nama,
                'url' => $request->url,
                'logo' => $name,
            ]);

            if ($result) {
                return redirect('/kelola-jejaring')->with('JejaringSuccess', 'Tambah Jejaring Berhasil');
            }
            return redirect('/kelola-jejaring')->with('JejaringError', 'Tambah Jejaring Gagal');
        }
    }

    public function edit($id)
    {
        $data = Jejaring::findOrFail($id);
        return view('admin/pages/jejaring/edit_jejaring', [
            'page' => 'kelola-jejaring',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:menus',
                'url' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',

                'url.required' => 'URL tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Jejaring::findOrFail($id);

            if (file_exists(public_path('storage/images/' . $data->logo))) {
                unlink(public_path('storage/images/' . $data->logo));

                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);

                $data->update([
                    'nama' => $request->nama,
                    'url' => $request->url,
                    'logo' => $name,
                ]);

                if ($data) {
                    return redirect('/kelola-jejaring')->with('JejaringSuccess', 'Edit Jejaring Berhasil');
                }
                return redirect('/kelola-jejaring')->with('JejaringError', 'Edit Jejaring Gagal');
            }
        }
    }

    public function destroy($id)
    {
        $data = Jejaring::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            unlink(public_path('storage/images/' . $data->logo));
            if ($result) {
                return redirect('/kelola-jejaring')->with('JejaringSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-jejaring')->with('JejaringError', 'Hapus Data Gagal');
        }
    }

    public function read()
    {
        $data = Jejaring::all();
        return view('pages/jejaring', [
            'data' => $data,
        ]);
    }
}
