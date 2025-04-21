<?php

namespace App\Http\Controllers\Dashboard\Admin\Student;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function show($id)
    {
        $student_profile = User::with('courses')->find($id);
        $registered_courses  = Registration::where('student_id', $student_profile->id)->get();
        return view('dashboard.profiles.student.show', compact('student_profile', 'registered_courses'));
    }
}
