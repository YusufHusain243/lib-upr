<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                'tanggal' => 'required',
                'berita' => 'required',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
                'berita.required' => 'Berita tidak boleh kosong',
            ]
        );


        if ($validator) {
            $result = Berita::create([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'isi' => $request->berita,
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
                'tanggal' => 'required',
                'berita' => 'required',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
                'berita.required' => 'Berita tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Berita::findOrFail($id);

            $result = $data->update([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'isi' => $request->berita,
            ]);

            if ($result) {
                return redirect('/kelola-berita')->with('BeritaSuccess', 'Edit Berita Berhasil');
            }
            return redirect('/kelola-berita')->with('BeritaError', 'Edit Berita Gagal');
        }
    }

    public function destroy($id)
    {
        $data = Berita::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            if ($result) {
                return redirect('/kelola-berita')->with('BeritaSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-berita')->with('BeritaError', 'Hapus Data Gagal');
        }
    }

    public function read($id)
    {
        $data = Berita::findOrFail($id);
        return view('pages/berita', [
            'data' => $data,
        ]);
    }
}
