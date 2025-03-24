<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:instructors'])->prefix('admin')->group(function() {
    Route::resource('roles', \App\Http\Controllers\Dashboard\Admin\RoleAndPremitionController::class);
});
