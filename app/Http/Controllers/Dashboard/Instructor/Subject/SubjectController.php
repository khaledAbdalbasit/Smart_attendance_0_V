<?php

namespace App\Http\Controllers\Dashboard\Instructor\Subject;

use App\Http\Controllers\Controller;
use App\Models\Course;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Course::where('instructor_id', auth()->guard('instructors')->user()->id)->get();
         return view('dashboard.instructor.subjects', compact('subjects'));
    }


}
