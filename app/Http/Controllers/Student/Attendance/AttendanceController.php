<?php

namespace App\Http\Controllers\Student\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show($course_id)
    {
        $attendance = Attendance::where("course_id", $course_id)
            ->where('student_id',auth()->user()->id)
            ->get();
        return view('student.attendance.attendance',compact('attendance'));
    }
}
