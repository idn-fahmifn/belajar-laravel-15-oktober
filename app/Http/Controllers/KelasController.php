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

}
