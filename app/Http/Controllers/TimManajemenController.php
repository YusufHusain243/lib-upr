<?php

namespace App\Http\Controllers;

use App\Models\TimManajemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TimManajemenController extends Controller
{

    public function index()
    {
        $data = TimManajemen::all();
        return view('admin/pages/tim_manajemen/tim_manajemen', [
            'page' => 'kelola-tim-manajemen',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:tim_manajemens',
                'jabatan' => 'required',
                'email' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',

                'jabatan.required' => 'Jabatan tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
            ]
        );


        if ($validator) {
            if (isset($request->foto)) {
                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);
            }

            $result = TimManajemen::create([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'foto' => $name,
            ]);

            if ($result) {
                return redirect('/kelola-tim-manajemen')->with('TimManajemenSuccess', 'Tambah Tim Manajemen Berhasil');
            }
            return redirect('/kelola-tim-manajemen')->with('TimManajemenError', 'Tambah Tim Manajemen Gagal');
        }
    }

    public function edit($id)
    {
        $data = TimManajemen::findOrFail($id);
        return view('admin/pages/tim_manajemen/edit_tim_manajemen', [
            'page' => 'kelola-tim-manajemen',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:tim_manajemens',
                'jabatan' => 'required',
                'email' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.unique' => 'Nama menu sudah ada',

                'jabatan.required' => 'Jabatan tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = TimManajemen::findOrFail($id);

            if (file_exists(public_path('storage/images/' . $data->foto))) {
                unlink(public_path('storage/images/' . $data->foto));

                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);

                $data->update([
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    'email' => $request->email,
                    'foto' => $name,
                ]);

                if ($data) {
                    return redirect('/kelola-tim-manajemen')->with('TimManajemenSuccess', 'Edit Tim Manajemen Berhasil');
                }
                return redirect('/kelola-tim-manajemen')->with('TimManajemenError', 'Edit Tim Manajemen Gagal');
            }
        }
    }

    public function destroy($id)
    {
        $data = TimManajemen::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            unlink(public_path('storage/images/' . $data->foto));
            if ($result) {
                return redirect('/kelola-tim-manajemen')->with('TimManajemenSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-tim-manajemen')->with('TimManajemenError', 'Hapus Data Gagal');
        }
    }

    public function read(){
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        
        $data = TimManajemen::all();
        return view('pages/tim_manajemen', [
            'data' => $data,
        ]);
    }
}
