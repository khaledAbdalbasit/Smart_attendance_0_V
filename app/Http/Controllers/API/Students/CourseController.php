<?php

namespace App\Http\Controllers\API\Students;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Student\CourseResource;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Registration::where('student_id',auth()->user()->id)->get();
        if (!$courses) {
            return ApiResponse::sendResponse(Response::HTTP_NOT_FOUND, 'No courses found', []);
        }
        return ApiResponse::sendResponse(Response::HTTP_OK, 'Courses found', CourseResource::collection($courses));
    }
}
