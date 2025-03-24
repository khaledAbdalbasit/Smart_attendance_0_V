<?php

namespace App\Http\Controllers\Dashboard\Admin\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateInstructorRequest;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::get();
        return view('dashboard.admin.instructor.index', compact('instructors'));
    }

    public function create()
    {
        return view('dashboard.admin.instructor.create');
    }

    public function store(CreateInstructorRequest $request)
    {
        $validated = $request->validated();

        $instructor = Instructor::create($validated);
        return redirect()->route('admin.instructors')->with('success', $instructor->name . ' created successfully.');
    }

    public function delete($id)
    {
        if ($id == 1) {
            return redirect()->route('admin.instructors')->with('failed-delete', 'This email cannot be deleted.');
        }
        $instructor = Instructor::find($id);
        $name = $instructor->name;
        $instructor->delete();
        return redirect()->route('admin.instructors')->with('success-delete', $name . ' deleted successfully.');

    }
}
