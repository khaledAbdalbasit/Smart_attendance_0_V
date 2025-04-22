<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['admin-only'])->group(function () {

    Route::controller(\App\Http\Controllers\Dashboard\Admin\Instructor\InstructorController::class)
        ->middleware(['auth:instructors', 'admin-only'])
        ->prefix('admin')
        ->group(function () {
            Route::get('/instructors', 'index')->name('admin.instructors');
            Route::get('/instructors/create', 'create')->name('admin.instructors.create');
            Route::post('/instructors/store', 'store')->name('admin.instructors.store');
            Route::get('/instructors/{id}', 'edit')->name('admin.instructors.edit');
            Route::put('/instructors/{id}', 'update')->name('admin.instructors.update');
            Route::delete('instructors/delete/{id}', 'delete')->name('admin.instructors.delete');
        });


    Route::controller(\App\Http\Controllers\Dashboard\Admin\Instructor\InstructorProfileController::class)
        ->middleware(['auth:instructors', 'admin-only'])
        ->prefix('admin/instructor')
        ->group(function () {
            Route::get('/profile/{id}', 'show.blade.php')->name('admin.profile.instructors');
        });

    Route::controller(\App\Http\Controllers\Dashboard\Admin\Subject\SubjectProfileController::class)
        ->middleware(['auth:instructors', 'admin-only'])
        ->prefix('admin/subject')
        ->group(function () {
            Route::get('profile/{id}', 'show')->name('admin.profile.subjects');
        });


    Route::controller(\App\Http\Controllers\Dashboard\Admin\Subject\SubjectController::class)
        ->middleware(['auth:instructors', 'admin-only'])
        ->prefix('admin/subject')
        ->group(function () {
            Route::get('/', 'index')->name('admin.subjects');
            Route::get('/create', 'create')->name('admin.subjects.create');
            Route::post('/store', 'store')->name('admin.subjects.store');
            Route::get('/edit/{id}', 'edit')->name('admin.subjects.edit');
            Route::put('/update/{id}', 'update')->name('admin.subjects.update');
            Route::delete('delete/{id}', 'delete')->name('admin.subjects.delete');
        });


    Route::controller(\App\Http\Controllers\Dashboard\Admin\Student\StudentController::class)
        ->middleware(['auth:instructors', 'admin-only'])
        ->prefix('admin/students')
        ->group(function () {
            Route::get('/', 'index')->name('admin.students');
            Route::get('/create', 'create')->name('admin.students.create');
            Route::post('/store', 'store')->name('admin.students.store');
            Route::get('/edit/{id}', 'edit')->name('admin.students.edit');
            Route::put('/update/{id}', 'update')->name('admin.students.update');
            Route::delete('delete/{id}', 'delete')->name('admin.students.delete');
        });
    Route::controller(\App\Http\Controllers\Dashboard\Admin\Student\StudentProfileController::class)
        ->middleware(['auth:instructors', 'admin-only'])
        ->prefix('admin/student')
        ->group(function () {
            Route::get('profile/{id}', 'show')->name('admin.students.show');
        });

    Route::controller(\App\Http\Controllers\Dashboard\Admin\Location\LocationController::class)
        ->middleware(['auth:instructors', 'admin-only'])
        ->prefix('admin/location')
        ->group(function () {
            Route::get('/', 'index')->name('admin.locations');
            Route::get('/create', 'create')->name('admin.locations.create');
            Route::post('/store', 'store')->name('admin.locations.store');
            Route::get('/edit/{location_name}', 'edit')->name('admin.locations.edit');
            Route::put('/update/{location_name}', 'update')->name('admin.locations.update');
            Route::delete('delete/{location_name}', 'delete')->name('admin.locations.delete');
        });
});

Route::controller(\App\Http\Controllers\Dashboard\Admin\Period\PeriodController::class)
    ->middleware(['auth:instructors', 'admin-only'])
    ->prefix('admin/period')
    ->group(function () {
        Route::get('/', 'index')->name('admin.periods');
        Route::get('/create', 'create')->name('admin.periods.create');
        Route::post('/store', 'store')->name('admin.periods.store');
        Route::get('/show/{id}', 'show')->name('admin.periods.show');
        Route::get('/edit/{period_number}', 'edit')->name('admin.periods.edit');
        Route::put('/update/{period_number}', 'update')->name('admin.periods.update');
        Route::delete('delete/{period_number}', 'delete')->name('admin.periods.delete');
    });

Route::controller(\App\Http\Controllers\Dashboard\Admin\Schedule\ScheduleController::class)
    ->middleware(['auth:instructors', 'admin-only'])
    ->prefix('admin/schedule')
    ->group(function () {
        Route::get('/', 'index')->name('admin.schedules');
        Route::get('/create', 'create')->name('admin.schedules.create');
        Route::post('/store', 'store')->name('admin.schedules.store');
        Route::get('/edit/{day}/{period_id}', 'edit')->name('admin.schedules.edit');
//        Route::get('/show/{id}', 'show')->name('admin.schedules.show');
        Route::put('/update/{day}/{period_id}', 'update')->name('admin.schedules.update');
        Route::delete('delete/{day}/{period_id}', 'delete')->name('admin.schedules.delete');
    });

Route::controller(App\Http\Controllers\Dashboard\Admin\Schedule_subject\Schedule_subjectController::class)
    ->middleware(['auth:instructors', 'admin-only'])
    ->prefix('admin/schedule_subject')
    ->group(function () {
        Route::get('/', 'index')->name('admin.schedules.subjects');
        Route::get('/create', 'create')->name('admin.schedules.subjects.create');
        Route::post('/store', 'store')->name('admin.schedules.subjects.store');
        Route::get('/edit/{day}/{period_id}/{location_name}/{course_id}/{instructor_id}', 'edit')
            ->name('admin.schedules.subjects.edit');
        Route::put('/update/{day}/{period_id}/{location_name}/{course_id}/{instructor_id}', 'update')
            ->name('admin.schedules.subjects.update');
        Route::delete('delete/{day}/{period_id}/{location_name}/{course_id}/{instructor_id}', 'delete')
            ->name('admin.schedules.subjects.delete');
    });

Route::controller(App\Http\Controllers\Dashboard\Admin\Registration\RegistrationController::class)
    ->middleware(['auth:instructors', 'admin-only'])
    ->prefix('admin/registration')
    ->group(function () {
        Route::get('/', 'index')->name('admin.registrations');
        Route::get('/create', 'create')->name('admin.registrations.create');
        Route::post('/store', 'store')->name('admin.registrations.store');
        Route::get('/edit/{id}', 'edit')->name('admin.registrations.edit');
        Route::put('/update/{id}', 'update')->name('admin.registrations.update');
        Route::delete('delete/{id}', 'delete')->name('admin.registrations.delete');
        Route::get('/search-student','searchStudent')->name('search.student');
        Route::get('/search-course','searchCourse')->name('search.course');
    });
