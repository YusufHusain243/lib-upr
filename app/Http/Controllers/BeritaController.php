<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Berita::all();
        return view('admin/pages/berita/berita', [
            'page' => 'kelola-berita',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required|unique:beritas',
                'judul_en' => 'required',
                'berita' => 'required',
                'berita_en' => 'required',
                'tanggal' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'judul_en.required' => 'Judul (English) tidak boleh kosong',
                'berita.required' => 'Berita tidak boleh kosong',
                'berita_en.required' => 'Berita (English) tidak boleh kosong',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
            ]
        );


        if ($validator) {
            if (isset($request->foto)) {
                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);
            }

            $result = Berita::create([
                'judul' => $request->judul,
                'judul_en' => $request->judul_en,
                'isi' => $request->berita,
                'isi_en' => $request->berita_en,
                'tanggal' => $request->tanggal,
                'foto' => $name,
            ]);

            if ($result) {
                return redirect('/kelola-berita')->with('BeritaSuccess', 'Tambah Berita Berhasil');
            }
            return redirect('/kelola-berita')->with('BeritaError', 'Tambah Berita Gagal');
        }
    }

    public function edit($id)
    {
        $data = Berita::findOrFail($id);
        return view('admin/pages/berita/edit_berita', [
            'page' => 'kelola-berita',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required|unique:beritas',
                'judul_en' => 'required',
                'berita' => 'required',
                'berita_en' => 'required',
                'tanggal' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'judul_en.required' => 'Judul (English) tidak boleh kosong',
                'berita.required' => 'Berita tidak boleh kosong',
                'berita_en.required' => 'Berita (English) tidak boleh kosong',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Berita::findOrFail($id);

            if (file_exists(public_path('storage/images/' . $data->foto))) {
                unlink(public_path('storage/images/' . $data->foto));

                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);

                $result = $data->update([
                    'judul' => $request->judul,
                    'judul_en' => $request->judul_en,
                    'isi' => $request->berita,
                    'isi_en' => $request->berita_en,
                    'tanggal' => $request->tanggal,
                    'foto' => $name,
                ]);

                if ($result) {
                    return redirect('/kelola-berita')->with('BeritaSuccess', 'Edit Berita Berhasil');
                }
                return redirect('/kelola-berita')->with('BeritaError', 'Edit Berita Gagal');
            }
        }
    }

    public function destroy($id)
    {
        $data = Berita::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            unlink(public_path('storage/images/' . $data->foto));
            if ($result) {
                return redirect('/kelola-berita')->with('BeritaSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-berita')->with('BeritaError', 'Hapus Data Gagal');
        }
    }

    public function read($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $data = Berita::findOrFail($id);
        return view('pages/berita', [
            'data' => $data,
        ]);
    }
}
