<?php
use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Dashboard\Admin\Instructor\InstructorController::class)->prefix('admin')->group(function () {
    Route::get('/instructors', 'index')->name('admin.instructors');
    Route::get('/instructors/create', 'create')->name('admin.instructors.create');
    Route::post('/instructors/store', 'store')->name('admin.instructors.store');
    Route::delete('instructors/delete/{id}', 'delete')->name('admin.instructors.delete');
});
