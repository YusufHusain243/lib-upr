<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index()
    {
        $data = Galeri::all();
        return view('admin/pages/galeri/galeri', [
            'page' => 'kelola-galeri',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:galeris',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',
            ]
        );


        if ($validator) {
            if (isset($request->foto)) {
                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);
            }

            $result = Galeri::create([
                'title' => $request->nama,
                'foto' => $name,
            ]);

            if ($result) {
                return redirect('/kelola-galeri')->with('GaleriSuccess', 'Tambah Galeri Berhasil');
            }
            return redirect('/kelola-galeri')->with('GaleriError', 'Tambah Galeri Gagal');
        }
    }

    public function edit($id)
    {
        $data = Galeri::findOrFail($id);
        return view('admin/pages/galeri/edit_galeri', [
            'page' => 'kelola-galeri',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:galeris',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',
            ]
        );

        if ($validator) {
            $data = Galeri::findOrFail($id);

            if (file_exists(public_path('storage/images/' . $data->foto))) {
                unlink(public_path('storage/images/' . $data->foto));

                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);

                $data->update([
                    'title' => $request->nama,
                    'foto' => $name,
                ]);

                if ($data) {
                    return redirect('/kelola-galeri')->with('GaleriSuccess', 'Edit Galeri Berhasil');
                }
                return redirect('/kelola-galeri')->with('GaleriError', 'Edit Galeri Gagal');
            }
        }
    }

    public function destroy($id)
    {
        $data = Galeri::findOrFail($id);
        if ($data) {
            unlink(public_path('storage/images/' . $data->foto));
            $result = $data->delete();
            if ($result) {
                return redirect('/kelola-galeri')->with('GaleriSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-galeri')->with('GaleriError', 'Hapus Data Gagal');
        }
    }

    public function more($page)
    {
        $data = Galeri::orderBy('id', 'desc')->get();
        return view('pages/galeri', [
            'data' => $data,
        ]);
    }
}
