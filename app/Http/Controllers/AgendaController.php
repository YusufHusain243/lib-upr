<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
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
                'tanggal' => 'required',
                'agenda' => 'required',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
                'agenda.required' => 'Agenda tidak boleh kosong',
            ]
        );


        if ($validator) {
            $result = Agenda::create([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'isi' => $request->agenda,
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
                'tanggal' => 'required',
                'agenda' => 'required',
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'judul.unique' => 'Judul menu sudah ada',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
                'agenda.required' => 'Agenda tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = Agenda::findOrFail($id);

            $result = $data->update([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'isi' => $request->agenda,
            ]);

            if ($result) {
                return redirect('/kelola-agenda')->with('AgendaSuccess', 'Edit Agenda Berhasil');
            }
            return redirect('/kelola-agenda')->with('AgendaError', 'Edit Agenda Gagal');
        }
    }

    public function destroy($id)
    {
        $data = Agenda::findOrFail($id);
        if ($data) {
            $result = $data->delete();
            if ($result) {
                return redirect('/kelola-agenda')->with('AgendaSuccess', 'Hapus Data Berhasil');
            }
            return redirect('/kelola-agenda')->with('AgendaError', 'Hapus Data Gagal');
        }
    }

    public function read($id)
    {
        $data = Agenda::findOrFail($id);
        return view('pages/agenda', [
            'data' => $data,
        ]);
    }
}
