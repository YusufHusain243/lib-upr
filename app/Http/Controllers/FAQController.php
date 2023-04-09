<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    public function index()
    {
        $data = FAQ::all();
        return view('admin/pages/faq', [
            'page' => 'kelola-faq',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'faq' => 'required',
                'faq_en' => 'required',
            ],
            [
                'faq.required' => 'FAQ tidak boleh kosong',
                'faq_en.required' => 'FAQ (English) tidak boleh kosong',
            ]
        );


        if ($validator) {
            $result = FAQ::create([
                'faq' => $request->faq,
                'faq_en' => $request->faq_en,
            ]);

            if ($result) {
                return redirect('/kelola-faq')->with('FaqSuccess', 'Tambah FAQ Berhasil');
            }
            return redirect('/kelola-faq')->with('FaqError', 'Tambah FAQ Gagal');
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'faq' => 'required',
                'faq_en' => 'required',
            ],
            [
                'faq.required' => 'FAQ tidak boleh kosong',
                'faq_en.required' => 'FAQ (English) tidak boleh kosong',
            ]
        );

        if ($validator) {
            $data = FAQ::findOrFail($id);

            $result = $data->update([
                'faq' => $request->faq,
                'faq_en' => $request->faq_en,
            ]);

            if ($result) {
                return redirect('/kelola-faq')->with('FaqSuccess', 'Edit FAQ Berhasil');
            }
            return redirect('/kelola-faq')->with('FaqError', 'Edit FAQ Gagal');
        }
    }

    public function read()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        
        $data = FAQ::all();
        return view('pages/faq', [
            'data' => $data,
        ]);
    }
}
