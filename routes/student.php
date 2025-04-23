<?php
use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Student\Courses\CourseController::class)->prefix('student')->group(function () {
    Route::get('/courses', 'index')->name('student.courses');
});

Route::controller(\App\Http\Controllers\Student\Attendance\AttendanceController::class)->prefix('student')->group(function () {
   Route::get('/attendance/{course_id}', 'show')->name('student.attendance');
});
