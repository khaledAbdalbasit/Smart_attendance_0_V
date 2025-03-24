<?php

use Illuminate\Support\Facades\Route;

Route::get('/instructor/register', [\App\Http\Controllers\Dashboard\Auth\RegisteredInstructorController::class, 'create'])->name('instructor.register');
Route::post('/instructor/register', [\App\Http\Controllers\Dashboard\Auth\RegisteredInstructorController::class, 'store']);

Route::prefix('instructor')->group(callback: function () {
    Route::get('/login', [\App\Http\Controllers\Dashboard\Auth\AuthenticatedSessionController::class, 'create'])->name('instructor.login');
    Route::post('/login', [\App\Http\Controllers\Dashboard\Auth\AuthenticatedSessionController::class, 'store']);

    Route::middleware(['auth:instructors'])->group(function () {
        Route::post('/logout', [\App\Http\Controllers\Dashboard\Auth\AuthenticatedSessionController::class, 'destroy'])->name('instructor.logout');
    });
});

Route::controller(\App\Http\Controllers\Dashboard\Instructor\Subject\SubjectController::class)->middleware('auth:instructors')->prefix('instructor/subject')->group(function () {
    Route::get('/', 'index')->name('instructor.subject.index');
    Route::get('/attendance/{id}', 'show')->name('instructor.subject.attendance');
});

Route::controller(\App\Http\Controllers\Dashboard\Instructor\Subject\AttendanceController::class)->middleware('auth:instructors')->prefix('instructor/subject')->group(function () {

    Route::get('/attendance/{id}', 'show')->name('instructor.subject.attendance');
    Route::post('/update-attendance', 'updateAttendance')->name('updateAttendance');

});

//Route::get('/instructor/subjects', function () {
//    return view('dashboard.instructor.subjects');
//})->middleware('auth:instructors')->name('instructor.subjects');

Route::get('/instructor/subjectAttendance', function () {
    return view('dashboard.instructor.subjectAttendance');
    })->name('dashboard.instructor.subjectAttendance');

Route::controller(\App\Http\Controllers\Dashboard\Instructor\Subject\TakeAttendanceController::class)
    ->middleware('auth:instructors')
    ->prefix('instructor/subject/takeAttendance')->group(function () {
        Route::get('/{id}', 'takeAttendance')->name('instructor.subject.takeAttendance');
        Route::post('/showAttendance', 'showAttendance')->name('instructor.subject.addAttendanceToDatabase');

    });
