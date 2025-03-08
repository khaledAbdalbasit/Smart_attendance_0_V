<?php

namespace App\Http\Controllers\Student\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show($course_id)
    {
        return view('student.attendance.attendance');
    }
}
