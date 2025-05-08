<?php

namespace App\Http\Controllers\Dashboard\Admin\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateInstructorRequest;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::where('role', '!=', 'super-admin')
            ->where('role', '!=', 'admin')
            ->get();
        return view('dashboard.admin.instructor.index', compact('instructors'));
    }

    public function create()
    {
        return view('dashboard.admin.instructor.create');
    }

    public function store(CreateInstructorRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($request->password);
        $instructor = Instructor::create($validated);
        return redirect()->route('admin.instructors')->with('success', $instructor->name . ' created successfully.');
    }

    public function edit($id)
    {
        $instructor = Instructor::find($id);
        return view('dashboard.admin.instructor.edit', compact('instructor'));
    }

    public function update(CreateInstructorRequest $request, $id)
    {
        $instructor = Instructor::find($id);
        $validated = $request->validated();

        if ($request->filled('password')) {
            $validated['password'] = bcrypt($request->password);
        } else {
            unset($validated['password']);
        }
        $instructor->update($validated);

        return redirect()->route('admin.instructors')->with('success', $instructor->name . ' updated successfully.');
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
