<?php

namespace App\Http\Controllers\API\Students;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Student\AttendanceResource;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AttendanceController extends Controller
{
    public function show($course_id)
    {
        $attendance = Attendance::where('course_id', $course_id)
            ->where('student_id', auth()->user()->id)
            ->get();
        if (!$attendance) {
            return ApiResponse::sendResponse(Response::HTTP_NOT_FOUND, 'No attendance found', []);
        }
        return ApiResponse::sendResponse(Response::HTTP_OK, 'Attendance found', AttendanceResource::collection($attendance));
    }
}
