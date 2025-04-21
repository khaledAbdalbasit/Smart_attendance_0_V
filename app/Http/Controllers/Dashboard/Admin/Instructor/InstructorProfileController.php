<?php

namespace App\Http\Controllers\Dashboard\Admin\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorProfileController extends Controller
{
    public function show($id)
    {
        $profile = Instructor::with('courses')->find($id);

        return view('dashboard.instructor.profile.show.blade.php', compact('profile'));
    }
}
