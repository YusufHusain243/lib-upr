<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SejarahController extends Controller
{
    public function index()
    {
        $data = Sejarah::all();
        return view('admin/pages/sejarah', [
            'page' => 'kelola-sejarah',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'sejarah' => 'required',
            ],
            [
                'sejarah.required' => 'Sejarah tidak boleh kosong',
            ]
        );


        if ($validator) {
            $result = Sejarah::create([
                'sejarah' => $request->sejarah,
            ]);

            if ($result) {
                return redirect('/kelola-sejarah')->with('SejarahSuccess', 'Tambah Sejarah Berhasil');
            }
            return redirect('/kelola-sejarah')->with('SejarahError', 'Tambah Sejarah Gagal');
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'sejarah' => 'required',
            ],
            [
                'sejarah.required' => 'Sejarah tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Sejarah::findOrFail($id);

            $result = $data->update([
                'sejarah' => $request->sejarah,
            ]);

            if ($result) {
                return redirect('/kelola-sejarah')->with('SejarahSuccess', 'Tambah Sejarah Berhasil');
            }
            return redirect('/kelola-sejarah')->with('SejarahError', 'Tambah Sejarah Gagal');
        }
    }

    public function read()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        
        $data = Sejarah::all();
        return view('pages/sejarah', [
            'data' => $data,
        ]);
    }
}
