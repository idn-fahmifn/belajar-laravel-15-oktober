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
        ]);

        return $request
    }

    // index, create, store, show, edit, update, delete

}
