<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::controller(\App\Http\Controllers\API\Students\AuthController::class)->prefix('students')->group(function () {
    Route::post('/login', 'login');
});

Route::controller(\App\Http\Controllers\API\Students\CourseController::class)->middleware('auth:sanctum')->prefix('students')->group(function () {
   Route::get('/courses', 'index');
});

Route::controller(\App\Http\Controllers\API\Students\AttendanceController::class)->middleware('auth:sanctum')->prefix('students')->group(function () {
   Route::get('/attendance/{course_id}', 'show.blade.php');
});
