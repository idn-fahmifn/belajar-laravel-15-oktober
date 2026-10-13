<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TrainingRequest;

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

    public function kirim(TrainingRequest $request)
    {
        $request->validated();
        return $request;
    }

    // index, create, store, show, edit, update, delete

}
