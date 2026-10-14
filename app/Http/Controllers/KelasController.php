<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TrainingRequest;
use App\Models\Course;

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

    public function course()
    {
        $courses = Course::all();
        return view('training.course', compact('courses'));
    }

    public function detailCourse($id)
    {
        $course = Course::find($id);
        return view('training.detail', compact('course'));
    }

    // index, create, store, show, edit, update, delete

}
