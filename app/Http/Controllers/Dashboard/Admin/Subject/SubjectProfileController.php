<?php

namespace App\Http\Controllers\Dashboard\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class SubjectProfileController extends Controller
{
    public function show($id)
    {
        $course_profile = Course::find($id);
        return view('dashboard.profiles.subjects.show', compact('course_profile'));
    }
}
