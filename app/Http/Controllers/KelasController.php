<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function laravel()
    {
        $trainer = "Fahmi Nuradi";
        return view('first-page.first', compact('trainer'));
    }

    public function ccna()
    {
        return view('first-page.second');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama_training' => ['string','required', 'min:3', 'max:30'],
            'nama_trainer' => ['string','required', 'min:3', 'max:30'],
            'durasi' => ['integer','required', 'min:1', 'max:5'],
        ], [
            'nama_training.string' => 'input nama training wajib karakter',
            'nama_training.required' => 'input nama training wajib diisi',
            'nama_training.min' => 'input nama training minimal 3 karakter',
            'nama_training.max' => 'input nama training maksimal 30 karakter',

            'nama_trainer.string' => 'input nama trainer wajib karakter',
            'nama_trainer.required' => 'input nama trainer wajib diisi',
            'nama_trainer.min' => 'input nama trainer minimal 3 karakter',
            'nama_trainer.max' => 'input nama trainer maksimal 30 karakter',

            'durasi.integer' => 'input durasi wajib angka',
            'durasi.required' => 'input durasi wajib diisi',
            'durasi.min' => 'input durasi minimal 1 hari',
            'durasi.max' => 'input durasi maksimal 5 hari',
        ]);

        return $request;
    }

    // index, create, store, show, edit, update, delete

}
