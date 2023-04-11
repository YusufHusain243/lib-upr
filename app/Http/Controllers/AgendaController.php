<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AgendaController extends Controller
{
    public function index()
    {
        $data = Agenda::all();
        return view('admin/pages/agenda/agenda', [
            'page' => 'kelola-agenda',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required|unique:agendas',
                'judul_en' => 'required',
                'agenda' => 'required',
                'agenda_en' => 'required',
                'tanggal' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'judul_en.required' => 'Judul (English) tidak boleh kosong',
                'agenda.required' => 'Agenda tidak boleh kosong',
                'agenda_en.required' => 'Agenda (English) tidak boleh kosong',
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

            $result = Agenda::create([
                'judul' => $request->judul,
                'judul_en' => $request->judul_en,
                'isi' => $request->agenda,
                'isi_en' => $request->agenda_en,
                'tanggal' => $request->tanggal,
                'foto' => $name,
            ]);

            if ($result) {
                return redirect('/kelola-agenda')->with('AgendaSuccess', 'Tambah Agenda Berhasil');
            }
            return redirect('/kelola-agenda')->with('AgendaError', 'Tambah Agenda Gagal');
        }
    }

    public function edit($id)
    {
        $data = Agenda::findOrFail($id);
        return view('admin/pages/agenda/edit_agenda', [
            'page' => 'kelola-agenda',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required|unique:agendas',
                'judul_en' => 'required',
                'agenda' => 'required',
                'agenda_en' => 'required',
                'tanggal' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'judul_en.required' => 'Judul (English) tidak boleh kosong',
                'agenda.required' => 'Agenda tidak boleh kosong',
                'agenda_en.required' => 'Agenda (English) tidak boleh kosong',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Agenda::findOrFail($id);
            if (file_exists(public_path('storage/images/' . $data->foto))) {
                unlink(public_path('storage/images/' . $data->foto));

                $file_gambar = $request->foto->getClientOriginalName();
                $file_name_asli = Str::slug(pathinfo($file_gambar, PATHINFO_FILENAME));
                $name = uniqid() . $file_name_asli . '.' . $request->foto->getClientOriginalExtension();
                $request->foto->move(public_path('storage/images'), $name);

                $result = $data->update([
                    'judul' => $request->judul,
                    'judul_en' => $request->judul_en,
                    'isi' => $request->agenda,
                    'isi_en' => $request->agenda_en,
                    'tanggal' => $request->tanggal,
                    'foto' => $name
                ]);

                if ($result) {
                    return redirect('/kelola-agenda')->with('AgendaSuccess', 'Edit Agenda Berhasil');
                }
                return redirect('/kelola-agenda')->with('AgendaError', 'Edit Agenda Gagal');
            }
        }
    }

    public function destroy($id)
    {
        $data = Agenda::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            unlink(public_path('storage/images/' . $data->foto));
            if ($result) {
                return redirect('/kelola-agenda')->with('AgendaSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-agenda')->with('AgendaError', 'Hapus Data Gagal');
        }
    }

    public function read($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $data = Agenda::findOrFail($id);
        return view('pages/agenda', [
            'data' => $data,
        ]);
    }
}
