<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin/dashboard', function () {
    return view('dashboard.home');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/instructorAuth.php';
require __DIR__. '/roles.php';
require __DIR__. '/student.php';
require __DIR__. '/admin.php';


