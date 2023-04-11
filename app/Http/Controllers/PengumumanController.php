<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index()
    {
        $data = Pengumuman::all();
        return view('admin/pages/pengumuman/pengumuman', [
            'page' => 'kelola-pengumuman',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required|unique:pengumumen',
                'judul_en' => 'required',
                'pengumuman' => 'required',
                'pengumuman_en' => 'required',
                'tanggal' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'judul_en.required' => 'Judul (English) tidak boleh kosong',
                'pengumuman.required' => 'Pengumuman tidak boleh kosong',
                'pengumuman_en.required' => 'Pengumuman (Englosh) tidak boleh kosong',
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

            $result = Pengumuman::create([
                'judul' => $request->judul,
                'judul_en' => $request->judul_en,
                'isi' => $request->pengumuman,
                'isi_en' => $request->pengumuman_en,
                'tanggal' => $request->tanggal,
                'foto' => $name,
            ]);

            if ($result) {
                return redirect('/kelola-pengumuman')->with('PengumumanSuccess', 'Tambah Pengumuman Berhasil');
            }
            return redirect('/kelola-pengumuman')->with('PengumumanError', 'Tambah Pengumuman Gagal');
        }
    }

    public function edit($id)
    {
        $data = Pengumuman::findOrFail($id);
        return view('admin/pages/pengumuman/edit_pengumuman', [
            'page' => 'kelola-pengumuman',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required|unique:pengumumen',
                'judul_en' => 'required',
                'pengumuman' => 'required',
                'pengumuman_en' => 'required',
                'tanggal' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'judul_en.required' => 'Judul (English) tidak boleh kosong',
                'pengumuman.required' => 'Pengumuman tidak boleh kosong',
                'pengumuman_en.required' => 'Pengumuman (Englosh) tidak boleh kosong',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Pengumuman::findOrFail($id);
            if (file_exists(public_path('storage/images/' . $data->foto))) {
                unlink(public_path('storage/images/' . $data->foto));

                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);

                $result = $data->update([
                    'judul' => $request->judul,
                    'judul_en' => $request->judul_en,
                    'isi' => $request->pengumuman,
                    'isi_en' => $request->pengumuman_en,
                    'tanggal' => $request->tanggal,
                    'foto' => $name
                ]);

                if ($result) {
                    return redirect('/kelola-pengumuman')->with('PengumumanSuccess', 'Edit Pengumuman Berhasil');
                }
                return redirect('/kelola-pengumuman')->with('PengumumanError', 'Edit Pengumuman Gagal');
                return redirect('/kelola-menu')->with('MenuError', 'Edit Menu Gagal');
            }
        }
    }

    public function destroy($id)
    {
        $data = Pengumuman::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            unlink(public_path('storage/images/' . $data->foto));
            if ($result) {
                return redirect('/kelola-pengumuman')->with('PengumumanSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-pengumuman')->with('PengumumanError', 'Hapus Data Gagal');
        }
    }

    public function read($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $data = Pengumuman::findOrFail($id);
        return view('pages/pengumuman', [
            'data' => $data,
        ]);
    }
}
