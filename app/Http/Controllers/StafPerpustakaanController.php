<?php

namespace App\Http\Controllers;

use App\Models\StafPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StafPerpustakaanController extends Controller
{
    public function index()
    {
        $data = StafPerpustakaan::all();
        return view('admin/pages/staf_perpustakaan', [
            'page' => 'kelola-staf',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'staf' => 'required',
                'staf_en' => 'required',
            ],
            [
                'staf.required' => 'Staf tidak boleh kosong',
                'staf_en.required' => 'Staf (English) tidak boleh kosong',
            ]
        );


        if ($validator) {
            $result = StafPerpustakaan::create([
                'staf' => $request->staf,
                'staf_en' => $request->staf_en,
            ]);

            if ($result) {
                return redirect('/kelola-staf')->with('StafSuccess', 'Tambah Staf Berhasil');
            }
            return redirect('/kelola-staf')->with('StafError', 'Tambah Staf Gagal');
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'staf' => 'required',
                'staf_en' => 'required',
            ],
            [
                'staf.required' => 'Staf tidak boleh kosong',
                'staf_en.required' => 'Staf (English) tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = StafPerpustakaan::findOrFail($id);

            $result = $data->update([
                'staf' => $request->staf,
                'staf_en' => $request->staf_en,
            ]);

            if ($result) {
                return redirect('/kelola-staf')->with('StafSuccess', 'Edit Staf Berhasil');
            }
            return redirect('/kelola-staf')->with('StafError', 'Edit Staf Gagal');
        }
    }

    public function read()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $data = StafPerpustakaan::all();
        return view('pages/staf_perpustakaan', [
            'data' => $data,
        ]);
    }
}
