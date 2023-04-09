<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $result = Pengumuman::create([
                'judul' => $request->judul,
                'judul_en' => $request->judul_en,
                'isi' => $request->pengumuman,
                'isi_en' => $request->pengumuman_en,
                'tanggal' => $request->tanggal,
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

            $result = $data->update([
                'judul' => $request->judul,
                'judul_en' => $request->judul_en,
                'isi' => $request->pengumuman,
                'isi_en' => $request->pengumuman_en,
                'tanggal' => $request->tanggal,
            ]);

            if ($result) {
                return redirect('/kelola-pengumuman')->with('PengumumanSuccess', 'Edit Pengumuman Berhasil');
            }
            return redirect('/kelola-pengumuman')->with('PengumumanError', 'Edit Pengumuman Gagal');
        }
    }

    public function destroy($id)
    {
        $data = Pengumuman::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            if ($result) {
                return redirect('/kelola-pengumuman')->with('PengumumanSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-pengumuman')->with('PengumumanError', 'Hapus Data Gagal');
        }
    }

    public function read($id)
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        
        $data = Pengumuman::findOrFail($id);
        return view('pages/pengumuman', [
            'data' => $data,
        ]);
    }
}
